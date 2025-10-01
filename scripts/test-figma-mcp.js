#!/usr/bin/env node

import fs from 'node:fs';

const baseUrl = process.argv[2] ?? 'http://localhost:3845';
const controller = new AbortController();

function log(...args) {
  console.log('[test-figma-mcp]', ...args);
}

async function* eventStream(reader) {
  const decoder = new TextDecoder();
  let buffer = '';
  while (true) {
    const { value, done } = await reader.read();
    if (done) {
      return;
    }
    buffer += decoder.decode(value, { stream: true });
    let boundary;
    while ((boundary = buffer.indexOf('\n\n')) !== -1) {
      const rawEvent = buffer.slice(0, boundary);
      buffer = buffer.slice(boundary + 2);
      if (!rawEvent.trim()) {
        continue;
      }
      const lines = rawEvent.split('\n');
      let event = 'message';
      const dataLines = [];
      for (const line of lines) {
        if (!line.trim()) continue;
        if (line.startsWith('event:')) {
          event = line.slice(6).trim();
        } else if (line.startsWith('data:')) {
          dataLines.push(line.slice(5).trim());
        }
      }
      yield { event, data: dataLines.join('\n') };
    }
  }
}

async function waitForResponse(events, targetId) {
  while (true) {
    const { value, done } = await events.next();
    if (done || !value) {
      throw new Error('SSE stream closed before receiving expected response');
    }
    const evt = value;
    if (evt.event !== 'message') {
      log(`SSE event ${evt.event}: ${evt.data}`);
      continue;
    }
    let payload;
    try {
      payload = JSON.parse(evt.data);
    } catch (err) {
      log('Failed to parse SSE payload:', evt.data);
      continue;
    }
    log('<=', JSON.stringify(payload));
    if (Object.prototype.hasOwnProperty.call(payload, 'id') && payload.id === targetId) {
      return payload;
    }
  }
}

async function main() {
  log(`Connecting to ${baseUrl}/sse`);
  const sseResponse = await fetch(`${baseUrl}/sse`, {
    headers: { Accept: 'text/event-stream' },
    signal: controller.signal,
  });
  if (!sseResponse.ok || !sseResponse.body) {
    throw new Error(`Failed to open SSE stream: ${sseResponse.status} ${sseResponse.statusText}`);
  }
  const reader = sseResponse.body.getReader();
  const events = eventStream(reader);
  const first = await events.next();
  if (first.done || !first.value || first.value.event !== 'endpoint') {
    throw new Error('Did not receive endpoint event from server');
  }
  const endpointPath = first.value.data.trim();
  const endpointUrl = new URL(endpointPath, baseUrl);
  const sessionId = endpointUrl.searchParams.get('sessionId');
  if (!sessionId) {
    throw new Error('Missing sessionId in endpoint event');
  }
  log('SSE session established:', sessionId);

  async function postMessage(body, extraHeaders = {}) {
    const response = await fetch(endpointUrl, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        ...extraHeaders,
      },
      body: JSON.stringify(body),
    });
    if (!response.ok && response.status !== 202) {
      const text = await response.text();
      throw new Error(`POST ${endpointUrl.pathname} failed: ${response.status} ${response.statusText} ${text}`);
    }
    return response.status;
  }

  await postMessage({
    jsonrpc: '2.0',
    id: 1,
    method: 'initialize',
    params: {
      protocolVersion: '2025-03-26',
      clientInfo: { name: 'codex-cli', version: '0.1' },
      capabilities: {},
    },
  });
  await waitForResponse(events, 1);

  await postMessage({
    jsonrpc: '2.0',
    id: 2,
    method: 'tools/list',
    params: {},
  });
  const toolsResponse = await waitForResponse(events, 2);
  const tools = toolsResponse?.result?.tools ?? [];
  log('Tools available:', tools.map((tool) => tool.name).join(', '));

  const simpleTool = tools.find((tool) => {
    const required = tool.inputSchema?.required || [];
    return Array.isArray(required) && required.length === 0;
  });
  if (simpleTool) {
    log(`Invoking sample tool ${simpleTool.name}`);
    const response = await postMessage({
      jsonrpc: '2.0',
      id: 3,
      method: 'tools/call',
      params: {
        name: simpleTool.name,
        arguments: {},
      },
    });
    await waitForResponse(events, 3);
  } else {
    const figmaTestKey = process.env.FIGMA_TEST_FILE_KEY;
    const getDataTool = tools.find((tool) => tool.name === 'get_figma_data');
    if (getDataTool && figmaTestKey) {
      log(`Invoking get_figma_data with fileKey ${figmaTestKey}`);
      const figmaTestNodeId = process.env.FIGMA_TEST_NODE_ID;
      await postMessage({
        jsonrpc: '2.0',
        id: 3,
        method: 'tools/call',
        params: {
          name: 'get_figma_data',
          arguments: {
            fileKey: figmaTestKey,
            ...(figmaTestNodeId ? { nodeId: figmaTestNodeId } : {}),
          },
        },
      });
      const toolResponse = await waitForResponse(events, 3);
      const outputPath = process.env.FIGMA_OUTPUT_PATH;
      if (outputPath && toolResponse?.result?.content) {
        try {
          const textContent = toolResponse.result.content
            .filter((item) => item.type === 'text')
            .map((item) => item.text)
            .join('\n\n');
          fs.writeFileSync(outputPath, textContent, 'utf8');
          log(`Wrote response content to ${outputPath}`);
        } catch (err) {
          console.error('[test-figma-mcp] ERROR writing output file:', err);
        }
      }
    } else if (getDataTool) {
      log('Set FIGMA_TEST_FILE_KEY to invoke get_figma_data.');
    } else {
      log('No suitable tool to invoke for connectivity test.');
    }
  }

  controller.abort();
}

main().catch((err) => {
  console.error('[test-figma-mcp] ERROR', err);
  controller.abort();
  process.exitCode = 1;
});

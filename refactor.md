# Refactor & Cleanup Playbook

## Guiding Principles
1. Preserve working functionality at every stage; refactor incrementally and keep production stable.
2. Prefer deletion over commenting-out; if something is not needed, remove it entirely.
3. Track each change with concise commits describing _why_ the removal/refactor is safe.
4. Maintain a paper trail for the client team: document every notable removal and the justification.

## Step 1 – Discovery & Inventory
1. Export a full dependency tree (`npm ls --depth=0`, `composer show --direct`) and mark packages that are unused, duplicated, or legacy.
2. Generate a component/page inventory from `resources/views` and `resources/js` to spot dead templates, experimental variants, or A/B leftovers.
3. Catalogue all public assets (`public/`, `resources/images/`, `storage/app/public/`) noting which screens still reference each file.
4. Audit configuration and environment files (`.env.*`, `config/`, `vite.config.js`, `tailwind.config.js`) for obsolete flags or toggles.
5. Search the repo for automation-helper artefacts (keywords such as `codex`, `claude`, `autogen`, `ai`) and list every hit that is not part of vendor code or sample data.

## Step 2 – Remove Automation Tooling Traces
1. Delete any documentation, comments, or helper scripts referencing Codex, Claude, MCP harnesses, or similar tooling.
2. Replace machine-generated commit messages or placeholders with human-friendly summaries (use `git rebase -i --reword` on branches that have not been shared; coordinate with the team before rewriting public history).
3. Review `scripts/`, temporary exports, and ad-hoc notes for automation narratives and purge them.
4. Confirm no CI/CD secrets, environment variables, or README sections mention those assistants; rewrite instructions in plain developer language.

## Step 3 – Codebase Pruning
1. For each feature/module flagged during discovery, determine if it is still required. If not:
   - Delete Blade/template files.
   - Remove associated controllers, Livewire/Alpine stores, or API endpoints.
   - Strip related routes and localisation strings.
2. After each deletion, run PHP/Laravel unit tests (`php artisan test`) and front-end builds (`npm run build`) to ensure nothing else relies on the removed surface area.
3. Consolidate duplicate variants (e.g., multiple hero/pricing sections). Pick the canonical implementation, migrate any unique copy/styling, then delete the alternates.
4. Replace inline styles with shared utility classes where possible; remove per-component `<style>` blocks once styles are migrated into Tailwind/custom CSS.

## Step 4 – Asset Hygiene
1. Map asset usage with tooling (e.g., `npm run vite-bundle-report`, `ls public/*.png` combined with `rg asset\(` searches).
2. Delete images, fonts, videos, and PDFs that are no longer referenced. Update any CMS or storage links to point to the cleaned set.
3. Compress and optimise retained media (tinypng/Imagemin for PNG/JPEG, SVGO for SVG) before re-committing.
4. Clear `public/hot`, compiled bundles, and cached view files from version control—they should stay untracked.

## Step 5 – Dependencies & Build Scripts
1. Remove unused npm/composer packages and re-run `npm install` / `composer install` to refresh lockfiles.
2. Audit build scripts (`package.json` scripts, `Vite` config) and delete commands that target removed bundles or experimental builds.
3. Update PHPStan/Psalm/ESLint/Prettier configs to drop ignores for files that no longer exist.
4. Re-run linting/tests to verify the trimmed dependency graph passes CI.

## Step 6 – Configuration & Environment
1. Compare `.env.example` with actual deployment settings; remove stale variables and document required keys.
2. Simplify feature flags and conditional logic—if an experiment is permanent, hard-code the final state and delete the toggle.
3. Ensure queue/mail/cache drivers in `config/*.php` match the target hosting environment; remove configs for providers the client will not use.

## Step 7 – Documentation & Handover
1. Update `README.md` with the post-cleanup project structure, setup steps, and deployment workflow.
2. Produce a changelog of every removal/refactor (include rationale, files touched, and testing notes).
3. Provide a lightweight architecture overview (diagrams or bullet list) so client developers understand the remaining modules.
4. Deliver a final “getting started” script (install, migrate, seed, test) and verify it works end-to-end on a fresh clone.

## Step 8 – Verification & Sign-off
1. Run full automated tests plus smoke tests in staging focusing on checkout, payment flows, and marketing landing pages.
2. Validate Lighthouse/Core Web Vitals after asset trimming to confirm no regressions.
3. Confirm Sentry/logging dashboards are clear of errors relating to removed code paths.
4. Secure sign-off from product/QA, then archive investigative notes.

## Step 9 – Final Repository Grooming
1. Ensure `.gitignore` excludes build artefacts, IDE files, caches, and any automation scratch directories.
2. Run `git clean -xdf` (after backup) to confirm the repo can be restored with `composer install && npm install` alone.
3. Tag the repository (e.g., `handoff-v1.0.0`) and create a release bundle if required by the client.
4. Hand over the repository link, credentials, and documentation package to the client developers.

---
_Before handing off, double-check that no references to automation assistants remain in documentation, code comments, commit metadata, or helper scripts._

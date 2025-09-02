# Bonobhumi A2 Pure Desi Ghee Landing Page - Debugging Specification

## 🎯 Debugging Overview

This debugging specification guides a thorough, cautious review and debugging process for the implemented landing page of **Bonobhumi খাঁটি দেশি সরের ঘি** (A2 Pure Desi Cream Ghee) built using the Laravel TALL stack. The goal is to identify and resolve any discrepancies, bugs, or issues in the implementation while strictly adhering to the original Implementation Specification. Proceed slowly and methodically to avoid introducing new changes, confusion, or regressions—focus only on fixing what doesn't match the requirements.

### Key Debugging Principles
- **Approach**: Go file by file, component by component, and page by page. Use Chain of Thought (CoT) reasoning at every step to explicitly outline your thought process.
- **Pace**: Be cautious and deliberate—do not rush. Analyze one element at a time, verify against the original spec, and suggest minimal, targeted fixes.
- **Scope**: Debug functional issues (e.g., code execution, form validation), design/UI/UX issues (e.g., layout, responsiveness, accessibility), and asset usage (e.g., correct images, fonts in appropriate sections).
- **No New Features**: Do not add, remove, or alter functionality beyond what's needed to match the spec. If something is already correct, explicitly note it and move on.
- **Reference Materials**: Cross-reference the original Implementation Specification, **Web.pdf** (for structure, copy, FAQs, testimonials, pricing), **USP Of 5 Product.pdf** (Ghee section only for benefits), and the **assets** folder (for images, icons, etc.). Use assets only in their specified sections. Use PDF tools to extract and verify exact content from PDFs where needed.
- **Output Format**: For each file/component, provide a step-by-step CoT analysis, list identified issues (categorized by functional, design/UI/UX, assets), suggest fixes, and confirm matches to spec.
- **Tools for AI Agent**: Use Chain of Thought (CoT) explicitly in your responses. Leverage available tools as needed: Use `code_execution` to test code snippets (e.g., PHP/Laravel validation or rendering simulations). Use `search_pdf_attachment` or `browse_pdf_attachment` to verify content from Web.pdf and USP Of 5 Product.pdf (e.g., exact headlines, FAQs, benefits). Use `browse_page` if external browsing is required (e.g., to check font rendering from Google Fonts or external resources). Simulate or describe tests step-by-step if tools are not directly applicable. Assume access to the codebase for review.

## 📋 Debugging Process Guidelines

### Step-by-Step Debugging Workflow
1. **Select a File/Component**: Start with the project structure from the original spec (e.g., begin with `routes/web.php`, then `resources/views/welcome.blade.php`, etc.).
2. **Chain of Thought (CoT) Reasoning**: For each item, explicitly state:
   - What the spec requires.
   - What the current implementation has (use tools like `code_execution` to inspect code if needed).
   - Step-by-step comparison (cross-reference PDFs via tools if content verification is required).
   - Any mismatches or issues.
3. **Issue Categorization**:
   - **Functional**: Does it work? (e.g., form submits, validation triggers, carousel rotates; test with `code_execution`).
   - **Design/UI/UX**: Matches color scheme, typography, responsiveness? User-friendly? (e.g., mobile layout, animations, accessibility; simulate breakpoints).
   - **Assets**: Correct usage? (e.g., `hero-ghee.jpg` in hero, certifications in trust sections, no misplaced icons; confirm paths).
4. **Verification**: Test mentally, simulate, or use tools (e.g., "On mobile breakpoint, check if layout collapses to single column"; use `code_execution` for rendering tests).
5. **Fix Suggestions**: Provide minimal code snippets or descriptions for fixes. Reference exact spec sections or PDF excerpts (extracted via tools).
6. **Confirmation**: End with "This component matches spec" or "Fixes required" and move to the next.
7. **Overall Project Scan**: After all files, perform a holistic review (e.g., performance, SEO, security; use tools for performance simulations if applicable).

### Debugging Order (File by File, Component by Component)
Follow this sequence to avoid confusion:
1. **routes/web.php** – Verify routes match spec.
2. **resources/views/welcome.blade.php** – Main page layout, including head (SEO meta), includes for components.
3. **resources/views/components/hero-section.blade.php** – Hero details.
4. **resources/views/components/features-section.blade.php** – Benefits from USP PDF.
5. **resources/views/components/pricing-section.blade.php** – Pricing and bundles.
6. **app/Livewire/ContactForm.php** & **resources/views/livewire/contact-form.blade.php** – Form logic and view.
7. **app/Livewire/FAQ.php** & **resources/views/livewire/faq.blade.php** – FAQ accordion.
8. **app/Livewire/TestimonialCarousel.php** & **resources/views/livewire/testimonial-carousel.blade.php** – Carousel.
9. **resources/views/components/footer.blade.php** – Footer elements.
10. **tailwind.config.js** – Colors, fonts, plugins.
11. **public/images/** – Asset placement (e.g., hero-ghee.jpg, certifications/).
12. **Environment files** (e.g., .env) – Config matches.
13. **Holistic Tests**: Performance, accessibility, SEO after individual debugs.

### Common Pitfalls to Watch For
- **Bengali Rendering**: Ensure UTF-8, fonts load (Noto Sans Bengali), no garbled text (use `browse_page` for font source if needed).
- **Responsiveness**: Test breakpoints (mobile-first: single column, touch-friendly).
- **Assets Mismatches**: Use only from **assets** folder; e.g., hero image in hero only, icons in features.
- **Content Fidelity**: Exact match to PDFs—no inventions (e.g., benefits only from USP Ghee section; verify with PDF tools).
- **Performance**: Lazy loading, <2s load; check purged CSS (simulate with tools).
- **Accessibility**: ARIA, contrast, keyboard nav.
- **Security**: CSRF, validation rules exact.

## 🧪 Debugging Test Cases

Use these as checklists during CoT for each component. Adapt from original spec's test cases.

### General Test Structure
- **Functional Tests**: Simulate inputs/outputs (use `code_execution`).
- **Design/UI/UX Tests**: Visual/interaction checks (simulate or describe).
- **Asset Tests**: Confirm paths, alt text, usage.

#### Example for Hero Section
- [ ] Headline in Bengali matches Web.pdf exactly (extract via `search_pdf_attachment`).
- [ ] CTA button clickable, styled per color scheme.
- [ ] Hero image: lazy-loaded, from assets/hero-ghee.jpg, alt text present.
- [ ] Trust badges: BSTI etc., with proper icons from assets/certifications/.
- [ ] Responsive: Gradient background, rounded corners on mobile/desktop.
- [ ] UX: No overlap on small screens; animations subtle.

#### ContactForm Tests
- [ ] Fields render with validation (e.g., mobile regex exact; test with `code_execution`).
- [ ] Total calculation: Updates on package/delivery change.
- [ ] Submission: Success message, no errors.
- [ ] UX: Error states visible, form mobile-optimized.
- [ ] Assets: No images here unless spec'd.

#### FAQ Tests
- [ ] Questions exact from Web.pdf (verify with `browse_pdf_attachment`).
- [ ] Accordion: Expands/collapses with Alpine.js.
- [ ] Accessibility: ARIA roles.
- [ ] UX: Search optional but if present, functional.

#### Performance & Holistic Tests
- [ ] Load time simulation: Check lazy images, purged CSS.
- [ ] Lighthouse: >90 score (simulate if possible).
- [ ] SEO: Meta tags exact.
- [ ] Security: CSRF active, inputs sanitized.

## 🔧 Debugging Tools & Simulations for AI Agent

- **CoT Prompting**: Always start responses with "Chain of Thought: Step 1: Recall spec requirement... Step 2: Examine current code... Step 3: Compare...".
- **Code Review Simulation**: Quote code snippets in analysis; use `code_execution` to run and verify snippets.
- **Browser Simulation**: Describe "Viewing on mobile: Layout should be... Actual: ... Issue: ... Fix: ..."; use `browse_page` for external validations.
- **Asset Check**: "Asset hero-ghee.jpg should be in hero section only; confirm path public/images/hero-ghee.jpg".
- **PDF Tools**: Use `search_pdf_attachment` for keyword/regex searches in PDFs; `browse_pdf_attachment` for full page text/screenshots.
- **Other Tools**: If needed, use web_search or x tools for supplementary info, but prioritize direct spec/PDF references.

## 🚀 Post-Debugging Checklist

### Verification
- [ ] All files/components debugged.
- [ ] No regressions introduced.
- [ ] Project matches original spec 100%.
- [ ] Re-run production optimizations (e.g., php artisan cache commands).

### Reporting
- Summarize all issues found and fixes applied.
- If complete: "Project is now production-ready per spec."

## 📝 Notes for AI Agent

### Debugging Mindset
- **Cautious Pace**: One file at a time—do not multitask.
- **CoT Emphasis**: Make reasoning transparent and step-by-step to avoid confusion.
- **Spec Loyalty**: If in doubt, quote the original spec verbatim or extract from PDFs via tools.
- **Cultural/Regional Focus**: Preserve Bengali authenticity; debug for BD mobile numbers, timezone (Asia/Dhaka).
- **Edge Cases**: Test invalid inputs, slow networks, screen readers.
- **Completion**: Only declare done after holistic review.

This debugging specification ensures a systematic, error-free process to refine the Bonobhumi landing page, maintaining fidelity to the original requirements while addressing any implementation gaps.
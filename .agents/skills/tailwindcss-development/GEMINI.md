# Tailwind CSS Development - Gemini Mandates

When this skill is active, you MUST adhere to these mandates in addition to the root GEMINI.md.

## Core Mandates

- **Utility First:** Use Tailwind utility classes for all styling. Avoid vanilla CSS or inline styles unless strictly necessary.
- **Consistency:** Follow established class order and naming conventions in existing Blade templates.
- **Spacing:** Use `gap-{size}` for spacing between siblings in Flex/Grid layouts instead of margins.
- **Dark Mode:** If the project uses dark mode, ALWAYS include `dark:` variants for all color-related classes.
- **Responsive:** Use responsive prefixes (`sm:`, `md:`, `lg:`, `xl:`) to ensure mobile-first responsiveness.
- **Redundancy:** Minimize redundant classes. Group elements and apply styles to parents where appropriate.
- **Components:** Reuse existing Blade components (in `resources/views/components`) instead of rebuilding UI elements.

## Tool Usage
- Use `npm run build` if changes are not reflected in the UI.
- Verify visual rendering across breakpoints if possible.

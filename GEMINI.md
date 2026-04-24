# Gemini CLI Foundation Rules

This file contains foundational mandates for the Gemini CLI agent. These rules take absolute precedence over general workflows.

## Project Context

This is a Laravel 13 application built with PHP 8.4.
- **Framework:** Laravel v13
- **Testing:** Pest v4 (PHPUnit v12)
- **Frontend:** TailwindCSS v3, AlpineJS v3, Laravel Breeze
- **Tools:** Laravel Boost, Pail, Pint, MCP

## Skill Activation

You MUST activate the relevant skill whenever you work in its domain:

- `laravel-best-practices`: Activate for ALL Laravel PHP code changes (Controllers, Models, Migrations, etc.).
- `pest-testing`: Activate for writing, editing, or fixing tests.
- `tailwindcss-development`: Activate for Tailwind utility class work in Blade templates or CSS.

## Core Mandates & Conventions

- **Code Quality:** Follow existing conventions. Check sibling files for structure and naming.
- **Naming:** Use descriptive names (e.g., `isRegisteredForDiscounts`, not `discount()`).
- **PHP Standards:**
    - Use PHP 8.4 features, including constructor property promotion.
    - Explicit return type declarations and type hints for ALL method parameters are mandatory.
    - Always use curly braces for control structures.
    - Use TitleCase for Enum keys.
    - Prefer PHPDoc blocks over inline comments.
- **Artisan First:** Use `php artisan make:` commands to create migrations, controllers, models, etc.
- **Testing:** EVERY change must be programmatically tested using Pest. Use `php artisan test --compact`.
- **Formatting:** Run `vendor/bin/pint --dirty --format agent` after modifying PHP files.

## Tool Usage Guidelines

- **Artisan:** Execute directly via `run_shell_command` (e.g., `php artisan route:list`). Use `--no-interaction`.
- **Tinker:** For quick PHP execution, use `php artisan tinker --execute 'Your::code();'`. Use single quotes for the command and double quotes for PHP strings.
- **Routes/Config:** Use `php artisan route:list` and `php artisan config:show` to inspect the application state.
- **Environment:** Read the `.env` file directly to check environment variables.

## Verification

- Validation is mandatory. Run the minimum required tests to ensure quality.
- If a Vite/manifest error occurs, run `npm run build`.

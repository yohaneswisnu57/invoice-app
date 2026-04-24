# Laravel Best Practices - Gemini Mandates

When this skill is active, you MUST adhere to these mandates in addition to the root GEMINI.md.

## Core Mandates

- **Consistency:** Always check sibling files for established patterns. Follow them over these rules if they conflict.
- **Performance:** 
    - Eager load relationships with `with()` to avoid N+1.
    - Select only required columns.
    - Use `withCount()` for relationship counts.
- **Security:**
    - Use Form Requests for validation.
    - Authorize every action via Policies or Gates.
    - No raw SQL with user input.
- **Eloquent:**
    - Use return type hints for relationship methods.
    - Use local scopes for reusable constraints.
    - Use `casts()` method for attribute casting.
- **Architecture:**
    - Keep controllers thin (under 10 lines preferred). Extract logic to Actions or Service classes.
    - Use Dependency Injection over `app()` helper.
- **Formatting:**
    - Run `vendor/bin/pint --dirty --format agent` after all PHP changes.
- **Testing:**
    - EVERY change requires a corresponding test. Use `php artisan make:test --pest`.

## Tool Usage
- Use `php artisan route:list` to verify route definitions.
- Use `php artisan tinker --execute '...'` for data verification.
- Use `php artisan make:[type]` for all new files.

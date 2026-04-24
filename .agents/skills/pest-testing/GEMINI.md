# Pest Testing - Gemini Mandates

When this skill is active, you MUST adhere to these mandates in addition to the root GEMINI.md.

## Core Mandates

- **Pest Only:** All tests MUST be written in Pest. No PHPUnit unless converting to Pest.
- **Organization:**
    - Feature tests in `tests/Feature`.
    - Unit tests in `tests/Unit`.
    - Browser tests in `tests/Browser`.
- **Convention:** Check existing tests for `test()` vs `it()` and match the project's style.
- **Assertions:** Use semantic assertions:
    - `assertSuccessful()` over `assertStatus(200)`
    - `assertNotFound()` over `assertStatus(404)`
    - `assertForbidden()` over `assertStatus(403)`
- **Datasets:** Use datasets for repetitive validation or logic tests.
- **Browser Testing:** Always use `assertNoJavaScriptErrors()` and `assertNoConsoleLogs()` in browser tests.
- **Architecture:** Use `arch()` tests to enforce code conventions (e.g., suffixes, extensions).
- **Validation:** Run `php artisan test --compact` before finalizing any change.

## Tool Usage
- Use `php artisan make:test --pest {name}` for new tests.
- Use `php artisan test --compact --filter={name}` for targeted testing.
- Use `php artisan test --compact` for full verification.

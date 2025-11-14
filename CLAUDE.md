# CLAUDE.md

# Development Commands

## Common Artisan Commands
```bash
# Development server
php artisan serve

# Database operations
php artisan migrate
php artisan migrate:rollback
php artisan migrate:refresh
php artisan db:seed
php artisan tinker

# Cache optimization
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan cache:clear
php artisan cache:config

# File storage link
php artisan storage:link

# Run tests
php artisan test

# Code formatting (Pint)
./vendor/bin/pint

# Generate documentation
php artisan route:list
```

## Frontend Development
```bash
# Vite development server
npm run dev

# Build for production
npm run build

# Watch for changes
npm run dev -- --watch
```

## Testing
```bash
# Run all tests
php artisan test

# Run specific test suite
php artisan test --testsuite=Feature
php artisan test --testsuite=Unit

# Run tests with coverage
php artisan test --coverage
```

# Code Architecture Overview

## Application Purpose
QDMS (Quality Data Management System) is a Laravel-based document management system focused on quality management processes. The system provides:

- User authentication and role-based access
- Document upload and management (RCA and BSOM files)
- Quality management process tracking and documentation
- Admin interface for file management

## Core Components

### Models (`app/Models/`)
- **User**: Standard Laravel authentication model with custom fields
- **UploadedFile**: Core model for file management with automatic cleanup on deletion
  - Stores file metadata (name, type, path)
  - Handles file type categorization (RCA/BSOM)
  - Implements Eloquent event listeners for automatic file deletion

### Controllers (`app/Http/Controllers/`)
- **AuthController**: Handles user authentication with custom login logic
- **FileController**: Manages file upload, storage, and deletion operations
  - Implements file validation (PDF, DOC, DOCX, XLSX, max 20MB)
  - Creates organized storage structure by file type
  - Handles file cleanup with error logging

### Routes (`routes/web.php`)
**Public Routes:**
- Home page and quality management system pages
- Static quality process documentation pages

**Protected Admin Routes (`admin/*`):**
- File management interface
- User authentication required for all admin functions

**Storage Routes:**
- Public file access via `/storage/{path}` endpoint

### Database Structure
**Core Tables:**
- `users`: Standard Laravel users table
- `uploaded_files`: Custom table for file metadata
  - `file_name`: Original file name
  - `file_type`: File category (rca/bsom)
  - `file_path`: Storage path relative to public disk
  - `timestamps`: Creation and modification tracking

### Storage Architecture
**File System Configuration:**
- Uses Laravel's `public` disk for file storage
- Files stored in `storage/app/public/uploads/{file_type}/`
- Automatic symbolic link creation: `public/storage` → `storage/app/public`
- Supports cloud storage via S3 (configured but not actively used)

### Frontend Structure
**Template Engine:** Blade templating with Bootstrap 5
**Layouts:**
- `layouts.app`: Main application layout
- `layouts.admin`: Admin interface layout

**Page Structure:**
- `pages/`: Quality management system pages
- `admin/`: Administrative interface components
- `auth/`: Authentication-related views

### Key Features

#### File Management System
- **File Organization**: RCA and BSOM files stored in separate directories
- **Validation**: File type restrictions and size limits (20MB max)
- **Automatic Cleanup**: Database records and physical files synchronized
- **Error Handling**: Comprehensive error logging with user feedback

#### User Authentication
- Custom authentication using `name` field instead of email
- Session-based authentication with Laravel's built-in Auth system
- Role-based access control for admin functionality

#### Quality Management Pages
- Multiple quality process documentation pages
- Static content for quality management procedures
- Responsive design for desktop and mobile access

### Development Patterns

#### File Upload Flow
1. User submits file via admin interface
2. Controller validates file type and size
3. Storage directories created if needed
4. File uploaded with timestamp-based naming
5. Database record created with metadata
6. User receives success/error feedback

#### Security Considerations
- File type validation prevents uploads
- Authentication middleware protects admin routes
- Automatic file cleanup prevents orphaned files
- Laravel's built-in CSRF protection

#### Error Handling
- Exception handling with detailed logging
- User-friendly error messages
- Fallback behaviors for file operations

## Testing Strategy

### Test Structure
- **Feature Tests**: `tests/Feature/` - End-to-end testing
- **Unit Tests**: `tests/Unit/` - Component testing
- **PHPUnit Configuration**: Custom test environment setup

### Testing Environment
- In-memory SQLite database for testing
- Mocked file storage operations
- Separate testing configuration

## Development Workflow

### Adding New File Types
1. Update FileController validation rules
2. Modify storage path generation
3. Update UI file type options
4. Add new quality management pages as needed

### Database Changes
1. Create migration files
2. Update models and relationships
3. Modify controllers for new fields
4. Update views and forms

### Frontend Development
- Use Vite for asset compilation
- Bootstrap 5 for responsive design
- Blade templating for reusable components
- Laravel Mix for CSS/JS processing

## Deployment Considerations

### Production Setup
- Configure proper storage permissions
- Set up scheduled tasks for maintenance
- Configure error logging and monitoring
- Set up proper environment variables

### Performance Optimization
- Enable Laravel caching mechanisms
- Use CDN for static assets
- Implement database query optimization
- Configure proper file serving headers

===

<laravel-boost-guidelines>
=== foundation rules ===

# Laravel Boost Guidelines

The Laravel Boost guidelines are specifically curated by Laravel maintainers for this application. These guidelines should be followed closely to enhance the user's satisfaction building Laravel applications.

## Foundational Context
This application is a Laravel application and its main Laravel ecosystems package & versions are below. You are an expert with them all. Ensure you abide by these specific packages & versions.

- php - 8.2.12
- laravel/framework (LARAVEL) - v11
- laravel/prompts (PROMPTS) - v0
- laravel/mcp (MCP) - v0
- laravel/pint (PINT) - v1
- laravel/sail (SAIL) - v1
- phpunit/phpunit (PHPUNIT) - v11


## Conventions
- You must follow all existing code conventions used in this application. When creating or editing a file, check sibling files for the correct structure, approach, naming.
- Use descriptive names for variables and methods. For example, `isRegisteredForDiscounts`, not `discount()`.
- Check for existing components to reuse before writing a new one.

## Verification Scripts
- Do not create verification scripts or tinker when tests cover that functionality and prove it works. Unit and feature tests are more important.

## Application Structure & Architecture
- Stick to existing directory structure - don't create new base folders without approval.
- Do not change the application's dependencies without approval.

## Frontend Bundling
- If the user doesn't see a frontend change reflected in the UI, it could mean they need to run `npm run build`, `npm run dev`, or `composer run dev`. Ask them.

## Replies
- Be concise in your explanations - focus on what's important rather than explaining obvious details.

## Documentation Files
- You must only create documentation files if explicitly requested by the user.


=== boost rules ===

## Laravel Boost
- Laravel Boost is an MCP server that comes with powerful tools designed specifically for this application. Use them.

## Artisan
- Use the `list-artisan-commands` tool when you need to call an Artisan command to double check the available parameters.

## URLs
- Whenever you share a project URL with the user you should use the `get-absolute-url` tool to ensure you're using the correct scheme, domain / IP, and port.

## Tinker / Debugging
- You should use the `tinker` tool when you need to execute PHP to debug code or query Eloquent models directly.
- Use the `database-query` tool when you only need to read from the database.

## Reading Browser Logs With the `browser-logs` Tool
- You can read browser logs, errors, and exceptions using the `browser-logs` tool from Boost.
- Only recent browser logs will be useful - ignore old logs.

## Searching Documentation (Critically Important)
- Boost comes with a powerful `search-docs` tool you should use before any other approaches. This tool automatically passes a list of installed packages and their versions to the remote Boost API, so it returns only version-specific documentation specific for the user's circumstance. You should pass an array of packages to filter on if you know you need docs for particular packages.
- The 'search-docs' tool is perfect for all Laravel related packages, including Laravel, Inertia, Livewire, Filament, Tailwind, Pest, Nova, Nightwatch, etc.
- You must use this tool to search for Laravel-ecosystem documentation before falling back to other approaches.
- Search the documentation before making code changes to ensure we are taking the correct approach.
- Use multiple, broad, simple, topic based queries to start. For example: `['rate limiting', 'routing rate limiting', 'routing']`.
- Do not add package names to queries - package information is already shared. For example, use `test resource table`, not `filament 4 test resource table`.

### Available Search Syntax
- You can and should pass multiple queries at once. The most relevant results will be returned first.

1. Simple Word Searches with auto-stemming - query=authentication - finds 'authenticate' and 'auth'
2. Multiple Words (AND Logic) - query=rate limit - finds knowledge containing both "rate" AND "limit"
3. Quoted Phrases (Exact Position) - query="infinite scroll" - Words must be adjacent and in that order
4. Mixed Queries - query=middleware "rate limit" - "middleware" AND exact phrase "rate limit"
5. Multiple Queries - queries=["authentication", "middleware"] - ANY of these terms


=== php rules ===

## PHP

- Always use curly braces for control structures, even if it has one line.

### Constructors
- Use PHP 8 constructor property promotion in `__construct()`.
    - <code-snippet>public function __construct(public GitHub $github) { }</code-snippet>
- Do not allow empty `__construct()` methods with zero parameters.

### Type Declarations
- Always use explicit return type declarations for methods and functions.
- Use appropriate PHP type hints for method parameters.

<code-snippet name="Explicit Return Types and Method Params" lang="php">
protected function isAccessible(User $user, ?string $path = null): bool
{
    ...
}
</code-snippet>

## Comments
- Prefer PHPDoc blocks over comments. Never use comments within the code itself unless there is something _very_ complex going on.

## PHPDoc Blocks
- Add useful array shape type definitions for arrays when appropriate.

## Enums
- Typically, keys in an Enum should be TitleCase. For example: `FavoritePerson`, `BestLake`, `Monthly`.


=== laravel/core rules ===

## Do Things the Laravel Way

- Use `php artisan make:` commands to create new files (i.e. migrations, controllers, models, etc.). You can list available Artisan commands using the `list-artisan-commands` tool.
- If you're creating a generic PHP class, use `artisan make:class`.
- Pass `--no-interaction` to all Artisan commands to ensure they work without user input. You should also pass the correct `--options` to ensure correct behavior.

### Database
- Always use proper Eloquent relationship methods with return type hints. Prefer relationship methods over raw queries or manual joins.
- Use Eloquent models and relationships before suggesting raw database queries
- Avoid `DB::`; prefer `Model::query()`. Generate code that leverages Laravel's ORM capabilities rather than bypassing them.
- Generate code that prevents N+1 query problems by using eager loading.
- Use Laravel's query builder for very complex database operations.

### Model Creation
- When creating new models, create useful factories and seeders for them too. Ask the user if they need any other things, using `list-artisan-commands` to check the available options to `php artisan make:model`.

### APIs & Eloquent Resources
- For APIs, default to using Eloquent API Resources and API versioning unless existing API routes do not, then you should follow existing application convention.

### Controllers & Validation
- Always create Form Request classes for validation rather than inline validation in controllers. Include both validation rules and custom error messages.
- Check sibling Form Requests to see if the application uses array or string based validation rules.

### Queues
- Use queued jobs for time-consuming operations with the `ShouldQueue` interface.

### Authentication & Authorization
- Use Laravel's built-in authentication and authorization features (gates, policies, Sanctum, etc.).

### URL Generation
- When generating links to other pages, prefer named routes and the `route()` function.

### Configuration
- Use environment variables only in configuration files - never use the `env()` function directly outside of config files. Always use `config('app.name')`, not `env('APP_NAME')`.

### Testing
- When creating models for tests, use the factories for the models. Check if the factory has custom states that can be used before manually setting up the model.
- Faker: Use methods such as `$this->faker->word()` or `fake()->randomDigit()`. Follow existing conventions whether to use `$this->faker` or `fake()`.
- When creating tests, make use of `php artisan make:test [options] <name>` to create a feature test, and pass `--unit` to create a unit test. Most tests should be feature tests.

### Vite Error
- If you receive an "Illuminate\Foundation\ViteException: Unable to locate file in Vite manifest" error, you can run `npm run build` or ask the user to run `npm run dev` or `composer run dev`.


=== laravel/v11 rules ===

## Laravel 11

- Use the `search-docs` tool to get version specific documentation.
- Laravel 11 brought a new streamlined file structure which this project now uses.

### Laravel 11 Structure
- No middleware files in `app/Http/Middleware/`.
- `bootstrap/app.php` is the file to register middleware, exceptions, and routing files.
- `bootstrap/providers.php` contains application specific service providers.
- **No app\Console\Kernel.php** - use `bootstrap/app.php` or `routes/console.php` for console configuration.
- **Commands auto-register** - files in `app/Console/Commands/` are automatically available and do not require manual registration.

### Database
- When modifying a column, the migration must include all of the attributes that were previously defined on the column. Otherwise, they will be dropped and lost.
- Laravel 11 allows limiting eagerly loaded records natively, without external packages: `$query->latest()->limit(10);`.

### Models
- Casts can and likely should be set in a `casts()` method on a model rather than the `$casts` property. Follow existing conventions from other models.

### New Artisan Commands
- List Artisan commands using Boost's MCP tool, if available. New commands available in Laravel 11:
    - `php artisan make:enum`
    - `php artisan make:class`
    - `php artisan make:interface`


=== pint/core rules ===

## Laravel Pint Code Formatter

- You must run `vendor/bin/pint --dirty` before finalizing changes to ensure your code matches the project's expected style.
- Do not run `vendor/bin/pint --test`, simply run `vendor/bin/pint` to fix any formatting issues.


=== phpunit/core rules ===

## PHPUnit Core

- This application uses PHPUnit for testing. All tests must be written as PHPUnit classes. Use `php artisan make:test --phpunit <name>` to create a new test.
- If you see a test using "Pest", convert it to PHPUnit.
- Every time a test has been updated, run that singular test.
- When the tests relating to your feature are passing, ask the user if they would like to also run the entire test suite to make sure everything is still passing.
- Tests should test all of the happy paths, failure paths, and weird paths.
- You must not remove any tests or test files from the tests directory without approval. These are not temporary or helper files, these are core to the application.

### Running Tests
- Run the minimal number of tests, using an appropriate filter, before finalizing.
- To run all tests: `php artisan test`.
- To run all tests in a file: `php artisan test tests/Feature/ExampleTest.php`.
- To filter on a particular test name: `php artisan test --filter=testName` (recommended after making a change to a related file).
</laravel-boost-guidelines>
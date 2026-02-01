# Filament Tutorial Project

A comprehensive tutorial project demonstrating how to build a modern admin panel using Laravel and Filament PHP.

## About This Project

This project serves as a practical guide for learning Filament, a powerful admin panel builder for Laravel applications. It showcases the creation of a blog post management system with full CRUD (Create, Read, Update, Delete) capabilities through an elegant and intuitive admin interface.

## Features

- **Filament Admin Panel**: Modern, responsive admin interface built with Filament 3.2
- **Post Management**: Complete CRUD operations for blog posts
  - Create new posts with title and content
  - List all posts with search and sorting capabilities
  - Edit existing posts
  - Delete posts (individual and bulk actions)
- **User Authentication**: Built-in Laravel authentication system
- **Responsive Design**: Mobile-friendly interface powered by Bootstrap 5
- **Modern Frontend**: Vue 3 integration with Vite for fast development

## Technology Stack

- **Backend Framework**: Laravel 11.9
- **PHP Version**: 8.2+
- **Admin Panel**: Filament 3.2
- **Frontend**: Vue 3, Bootstrap 5
- **Build Tool**: Vite 5
- **Database**: SQLite (default), supports MySQL, PostgreSQL
- **Testing**: PHPUnit 11

## Prerequisites

Before you begin, ensure you have the following installed:

- PHP >= 8.2
- Composer
- Node.js >= 16 and NPM
- SQLite (or MySQL/PostgreSQL if preferred)
- Git

## Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/jithmapv/filament-tutorial.git
   cd filament-tutorial
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node dependencies**
   ```bash
   npm install
   ```

4. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Create database and run migrations**
   ```bash
   touch database/database.sqlite
   php artisan migrate
   ```

6. **Create an admin user**
   ```bash
   php artisan make:filament-user
   ```
   Follow the prompts to create your first admin user.

7. **Build frontend assets**
   ```bash
   npm run build
   ```

## Running the Application

1. **Start the development server**
   ```bash
   php artisan serve
   ```

2. **Access the application**
   - Main application: `http://localhost:8000`
   - Admin panel: `http://localhost:8000/admin`

3. **For frontend development** (optional)
   ```bash
   npm run dev
   ```

## Project Structure

```
app/
├── Filament/
│   └── Resources/
│       └── PostResource.php          # Filament resource for posts
├── Models/
│   ├── Post.php                      # Post model
│   └── User.php                      # User model
├── Http/
│   └── Controllers/                  # HTTP controllers
└── Providers/
    └── Filament/
        └── AdminPanelProvider.php    # Filament configuration

database/
└── migrations/
    └── 2024_10_15_190957_create_posts_table.php

resources/
├── views/                            # Blade templates
└── js/                               # Frontend JavaScript
```

## Usage

### Managing Posts

1. Log in to the admin panel at `/admin`
2. Navigate to the "Posts" section in the sidebar
3. Use the interface to:
   - Create new posts with the "New Post" button
   - Search posts by title
   - Sort posts by clicking column headers
   - Edit posts by clicking the edit action
   - Delete posts individually or in bulk

### Key Filament Features Demonstrated

- Form builders with TextInput and Textarea components
- Table builders with sorting and searching
- Resource pages (List, Create, Edit)
- Bulk actions for efficient data management

## Configuration

### Database Configuration

The project uses SQLite by default. To use MySQL or PostgreSQL:

1. Update the `.env` file:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

2. Create the database and run migrations:
   ```bash
   php artisan migrate
   ```

### Filament Configuration

Filament configuration can be found in:
- `app/Providers/Filament/AdminPanelProvider.php`

## Testing

Run the test suite:

```bash
php artisan test
```

Or using PHPUnit directly:

```bash
./vendor/bin/phpunit
```

## Code Quality

Format code using Laravel Pint:

```bash
./vendor/bin/pint
```

## Learning Resources

- [Laravel Documentation](https://laravel.com/docs)
- [Filament Documentation](https://filamentphp.com/docs)
- [Filament Tricks](https://filamentphp.com/tricks)
- [Laravel Bootcamp](https://bootcamp.laravel.com)

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

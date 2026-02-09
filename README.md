# Laravel CRUD Application

A simple CRUD (Create, Read, Update, Delete) application built with Laravel for managing blog posts.

## Features

- ✅ Create new posts
- ✅ View all posts with pagination
- ✅ View individual post details
- ✅ Edit existing posts
- ✅ Delete posts
- ✅ Form validation
- ✅ Clean, responsive UI with built-in styling

## Requirements

- PHP 8.1+
- Composer
- SQLite (default)

## Installation

1. Clone the repository:
```bash
git clone https://github.com/YOUR-USERNAME/app-crud.git
cd app-crud
```

2. Install dependencies:
```bash
composer install
```

3. Copy environment file:
```bash
cp .env.example .env
```

4. Generate application key:
```bash
php artisan key:generate
```

5. Run migrations:
```bash
php artisan migrate
```

6. Start the development server:
```bash
php artisan serve
```

7. Open in browser:
```
http://localhost:8000/posts
```

## Project Structure

```
app/
├── Http/Controllers/PostController.php    # CRUD logic
├── Models/Post.php                        # Post model

database/
├── migrations/
│   └── 2026_02_09_000000_create_posts_table.php

resources/views/posts/
├── layout.blade.php      # Base layout with styling
├── index.blade.php       # List all posts
├── create.blade.php      # Create post form
├── show.blade.php        # View post details
└── edit.blade.php        # Edit post form

routes/
└── web.php               # Resource routes
```

## Database Schema

Posts table with the following columns:
- `id` (Primary Key)
- `title` (String)
- `content` (Text)
- `created_at` (Timestamp)
- `updated_at` (Timestamp)

## API Routes

```
GET  /posts              - List all posts
GET  /posts/create       - Show create form
POST /posts              - Store new post
GET  /posts/{id}         - View post details
GET  /posts/{id}/edit    - Show edit form
PUT  /posts/{id}         - Update post
DELETE /posts/{id}       - Delete post
```

## License

This project is open source and available under the MIT license.

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

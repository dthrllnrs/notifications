# Notifications App

A modern Laravel + Inertia.js + Vue 3 application for managing and displaying user notifications with filtering, sorting, and pagination.

## Introduction

This app provides a robust notification system with:
- Multiple notification types (message, alert, reminder, update, warning, info, error, comment)
- Rich HTML content support (including links)
- Read/unread filtering
- Pagination and responsive UI
- Fully tested backend and frontend

## Installation Instructions

### Prerequisites
- PHP 8.1+
- Composer
- Node.js & npm
- A supported database (SQLite, MySQL, PostgreSQL, etc.)

### Steps

1. **Clone the repository:**
   ```bash
   git clone https://github.com/dthrllnrs/notifications.git
   cd notifications
   ```

2. **Install PHP dependencies:**
   ```bash
   composer install
   ```

3. **Install JavaScript dependencies:**
   ```bash
   npm install
   ```

4. **Copy and configure environment file:**
   ```bash
   cp .env.example .env
   # Edit .env to set your database and mail settings
   ```

5. **Generate application key:**
   ```bash
   php artisan key:generate
   ```

6. **Run migrations and seeders:**
   ```bash
   php artisan migrate --seed
   ```

7. **Build frontend assets:**
   ```bash
   npm run build
   # or for development
   npm run dev
   ```

8. **Run the application:**
   ```bash
   php artisan serve
   ```
   Visit [http://localhost:8000/notifications](http://localhost:8000/notifications)

## Running Tests

```bash
php artisan test
# or
./vendor/bin/pest
```

---

For more details, see the code and comments in each file. Contributions and issues are welcome!

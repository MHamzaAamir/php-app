# PHP App (Laravel)
Test APP

## Overview

This project is a Laravel-based web application currently under development.

## Local Setup

### Prerequisites

Make sure the following are installed:

- PHP 8.2 or later
- Composer
- Node.js and npm (for asset building and Vite dev server)
- An SQL database (PostgreSQL recommended)

### 1. Install dependencies

```bash
composer install
npm install
```

### 2. Configure environment

Copy the environment file and generate an application key:

```bash
cp .env.example .env
php artisan key:generate
```

Update database credentials in `.env`:

- `DB_CONNECTION`
- `DB_HOST`
- `DB_PORT`
- `DB_DATABASE`
- `DB_USERNAME`
- `DB_PASSWORD`

### 3. Run migrations and seeders

```bash
php artisan migrate --seed
```

After this step, the database will contain one admin account and one student account for local development.

### 4. Start the application

Run the development environment

```bash
composer run dev
```

The application should now be available locally at:

`http://127.0.0.1:8000`

## Seeded Accounts

The database seeder creates the following user accounts by default:

- Admin account  
	Email: `admin@test.com`  
	Password: `admin`

- Student account  
	Email: `student@test.com`  
	Password: `student`


# Farm 2 Plate

A Laravel-based project for managing and ordering recipes, with an admin dashboard for recipe management and a user side for browsing and adding to the cart.

## Table of Contents
- [Installation](#installation)
- [Environment Setup](#environment-setup)
- [Database Configuration](#database-configuration)
- [API Setup](#api-setup)
- [Running the Application](#running-the-application)
- [Admin Dashboard](#admin-dashboard)
- [Features](#features)
- [Testing](#testing)
- [License](#license)

## Installation

To set up the project locally, follow these steps:

1. **Clone the repository:**
    ```bash
    git clone <repository-url>
    cd farm-2-plate
    ```

2. **Install dependencies:**
    Ensure you have Composer and Node.js installed, then run:
    ```bash
    composer install
    npm install
    ```

3. **Set up the environment file:**
    Copy `.env.example` to `.env`:
    ```bash
    cp .env.example .env
    ```

4. **Generate the application key:**
    ```bash
    php artisan key:generate
    ```

## Environment Setup

In the `.env` file, set the following:

- **APP_NAME** = Farm 2 Plate
- **APP_ENV** = local
- **APP_KEY** = base64:your_generated_key
- **APP_DEBUG** = true
- **APP_URL** = http://localhost

For database configuration, update:

- **DB_CONNECTION** = mysql
- **DB_HOST** = 127.0.0.1
- **DB_PORT** = 3306
- **DB_DATABASE** = your_database_name
- **DB_USERNAME** = your_database_username
- **DB_PASSWORD** = your_database_password

## Database Configuration

1. **Run migrations:**
    ```bash
    php artisan migrate
    ```

2. **Seed the database** (optional, for default data):
    ```bash
    php artisan db:seed
    ```

## API Setup

1. Ensure you have Laravel Sanctum set up for API authentication.
2. If using a third-party service for APIs (e.g., Stripe for payments), configure it in `.env`:
    ```bash
    STRIPE_KEY=your_stripe_key
    ```

## Running the Application

1. **Start the development server:**
    ```bash
    php artisan serve
    ```
    This will start the application on `http://localhost:8000`.

2. **Front-end setup:**
    Run the following to compile assets:
    ```bash
    npm run dev
    ```

    To create the storage link for your project, run the following Artisan command:

````bash
php artisan storage:link
````
This will create a symbolic link from public/storage to storage/app/public, allowing you to serve files (like images) stored in the storage directory publicly.

## Admin Dashboard

Admins can access the dashboard by logging in with the admin credentials. To view and manage recipes, use the Filament-powered dashboard at:

- **Login URL**: `/admin/login`
- **Dashboard URL**: `/admin`

## Features

- User authentication using Laravel Jetstream.
- Recipe management via an admin dashboard with Filament.
- Searchable recipe page with vegetarian/non-vegetarian filters.
- Cart functionality for users to add recipes.
- Ability for users to rate and review recipes.
- Community page for users to share photos and comments.





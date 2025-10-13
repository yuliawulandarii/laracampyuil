# laracampyuil

This project demonstrates Laravel 8 integrations with popular packages and services:

- **Laravel Socialite** – OAuth authentication
- **Laravel Breeze** – Lightweight auth starter kit
- **Midtrans** – Indonesian payment gateway
  
---
## Overview

laracampyuil is a comprehensive developer tool designed to accelerate the development of scalable, secure, and maintainable Laravel applications. It integrates essential backend features with a flexible front-end setup, enabling developers to build modern web platforms efficiently.

## About This Project

This repository is the result of a bootcamp class organized by **BuildWithAngga**.  
The class focuses on practical Laravel development and building scalable web applications.

### Why laracampyuil?

This project aims to streamline Laravel development by providing a ready-to-use architecture that combines best practices with powerful integrations. The core features include:

- 🎨 **Colorful Palette**: Tailwind CSS configuration for consistent, optimized styling across your app.
- 🔒 **Secure Foundations**: Built-in authentication, role management, email verification, and middleware for robust security.
- 🚀 **Performance Boost**: Asset compilation with Webpack Mix and efficient dependency management for fast, reliable builds.
- 📧 **Automated Communication**: Email notifications for registration, checkout, and payment updates to enhance user engagement.
- 🌐 **Real-Time Interaction**: Event broadcasting setup for live updates and notifications.
- 🧩 **Modular UI Components**: Reusable Blade components for a cohesive and maintainable front-end architecture.

> **Note:** This project is based on the original **laracamp**, with "**yuil**" added from my name to personalize this version.

---

## Getting Started

### Prerequisites

This project requires the following dependencies:

- **Programming Language**: PHP
- **Package Managers**: Composer, NPM

### Installation

Build **laracampyuil** from the source and install dependencies:

1. **Clone the repository:**

    ```bash
    git clone https://github.com/yuliawulandarii/laracampyuil
    ```

2. **Navigate to the project directory:**

    ```bash
    cd laracampyuil
    ```

3. **Install the dependencies using Composer:**

    ```bash
    composer install
    ```

4. (Optional) Install frontend dependencies and build assets:

    ```bash
    npm install
    npm run dev
    ```

## Using This Project

1. **Create a new database** matching the name you will set in the `.env` file.  
   (Note: The `.env` file is not included for security reasons. Please copy `.env.example` and update the database credentials accordingly.)

2. **Copy the `.env.example` file to `.env`:**

    ```bash
    cp .env.example .env
    ```

3. **Edit the `.env` file** and update the following database settings according to your local environment:

    ```
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_username
    DB_PASSWORD=your_database_password
    ```

4. **Run the migrations** to create the database tables:

    ```bash
    php artisan migrate
    ```

5. (Optional) **Seed the database** with dummy data:

    ```bash
    php artisan db:seed
    ```

6. **Start the development server:**

    ```bash
    php artisan serve
    ```

7. Open your browser and visit [http://localhost:8000](http://localhost:8000) to see the app running.

---

*Happy coding!* 🚀

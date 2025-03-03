# FurrHub

&#x20;A Web-based E-Commerce Platform for Pet Supplies and Services \
FurrHub is a Laravel-based web application using Laravel Breeze with the Blade templating engine. This README will guide you through the installation and setup process.

## Prerequisites

Ensure you have the following installed on your system:

- [Laravel 11.x](https://laravel.com/docs/11.x/installation)
- Laravel Installer (`Laravel Installer 5.11.2`)
- [Composer 2.8.5](https://getcomposer.org/)
- Node.js & npm
- MySQL Database

## Installation

1. **Verify Laravel and Composer Installation**

   ```sh
   laravel
   composer
   ```

   Ensure the correct versions are installed.

2. **Create a New Laravel Project**

   ```sh
   laravel new furrhub
   cd furrhub
   ```

3. **Choose Breeze as the Starter Kit**

   ```sh
   breeze
   ```

4. **Select Blade as the Stack**

   ```sh
   blade
   ```

5. **Disable Dark Mode Support**

   ```sh
   no
   ```

6. **Choose PHPUnit as the Testing Framework**

   ```sh
   1
   ```

7. **Select MySQL as the Database**

   ```sh
   mysql
   ```

8. **Skip Default Database Migrations**

   ```sh
   no
   ```

9. **Install npm dependencies**

   ```sh
   npm install
   ```

### Fixing Vulnerabilities (if prompted)

If vulnerabilities related to `esBuild` appear, follow these steps:

1. Run the audit fix command:

   ```sh
   npm audit fix --force
   ```

2. If the issue persists, manually update `package-lock.json`:

   - Open `package-lock.json`
   - Search for `0.24.2`
   - Replace it with `0.25.0`
   - Save the file
   - Run:
     ```sh
     npm install
     npm run build
     ```

3. **Install Additional Dependencies (for React & Tailwind CSS)**

   ```sh
   npm install react react-dom
   npm install tailwindcss @tailwindcss/vite
   ```

## Database Setup

1. **Download and Import Database**

   - Download [`furrhub.sql`](https://github.com/GeykScript/FurrHUB/main/furrhub.sql)
   - Import it into MySQL

2. **Update ************************`.env`************************ File**

   ```ini
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=furrhub
   DB_USERNAME=root
   DB_PASSWORD=
   ```

## Running the Application

1. **Start the Laravel Development Server**

   ```sh
   php artisan serve
   ```

2. **Start Frontend Development**

   ```sh
   npm run dev
   ```

Your Laravel project is now set up and running! 🚀


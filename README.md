# FurrHub

A Web-based E-Commerce Platform for Pet Supplies and Services\
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

2. **Clone the Repository from GitHub**

   ```sh
   git clone https://github.com/GeykScript/FurrhHUB.git
   cd furrhub
   ```



1. Install Additional Dependencies  if none (for React & Tailwind CSS)
   ```sh
   npm install react react-dom
   npm install tailwindcss @tailwindcss/vite
   ```

## Database Setup

1. **Download and Import Database**

   - Download [`furrhub.sql`](https://drive.google.com/drive/u/1/folders/1QFmRNVXt_gM_DsDhvGHHahxFJR2pL7wW)
   - Import it into MySQL

2. **Update ********************************************************************************`.env`******************************************************************************** File**

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


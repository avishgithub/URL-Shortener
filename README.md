# URL Shortener Laravel Project

A simple URL shortening web application built using Laravel framework.  
Users can submit long URLs and get a shortened version which redirects to the original URL.  
Includes an admin page to list all shortened URLs and track click counts.

---

## Features

- Shorten any valid URL into a unique short link.
- Redirect short URLs to their original URLs.
- Track how many times each short URL is visited.
- Admin page to view all URLs and their click statistics.

---

## Requirements

- PHP >= 8.0
- Composer
- MySQL or any supported database
- Laravel 12.x
- Node.js and npm (optional for frontend asset compilation)

---

## Installation & Setup

1. **Clone the repository**

git clone https://github.com/yourusername/url-shortener.git
cd url-shortener

2. **Install PHP dependencies**

composer install

3. **Copy the environment file and generate app key**

cp .env.example .env
php artisan key:generate

4. **Configure your database**

Open .env file and update the following with your database credentials:

- ini
- Copy
- Edit
- DB_CONNECTION=mysql
- DB_HOST=127.0.0.1
- DB_PORT=3306
- DB_DATABASE=your_database_name
- DB_USERNAME=your_db_username
- DB_PASSWORD=your_db_password

5. **Run database migrations**

php artisan migrate

6. **Start the development server**

php artisan serve

7. **Access the app**

Open your browser and visit: http://127.0.0.1:8000

## Usage
On the homepage, enter any valid URL and click Shorten to get a short URL.

Visit the short URL to be redirected to the original URL.

Visit /admin/urls (e.g., http://127.0.0.1:8000/admin/urls) to see the list of all URLs and their click counts.


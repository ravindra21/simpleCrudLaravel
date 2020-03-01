## konfigurasi

/# Install dependencies

`composer install`

/# setting database username dan password

`cp .env.example .env`

buka file .env (edit db username,passwprd,dan database name)

/# Generate key

`php artisan key:generate`

/# Run migrations (tables and Seeders)

`php artisan migrate --seed`

/# Create Server

`php artisan serve`

/# Access project

`http://127.0.0.1:8000`

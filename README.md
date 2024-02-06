## Admin Login Info
email: admin@laravelproject.com
password: admin


## Steps for Installtion
```
git clone https://github.com/pratikprajapati9999/laravel-blog-application-enhancement.git
cd laravel-blog-application-enhancement
cp .env.example .env

// Then set database credentials in .env file

composer install / composer update
php artisan key:generate
php artisan migrate
php artisan db:seed
php artisan serve
```

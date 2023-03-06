# Exam

#### Run

```
composer install
php artisan migrate
php artisan db:seed
npm run dev
php artisan serve
```

To unblock your IP address navigate and comment line 22
```php
\App\Http\Middleware\BlockIPAddressMiddleware.php
```

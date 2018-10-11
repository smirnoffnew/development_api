# Laravel API for support frontend development

This is project created like service for creating test frontend projects.


## Getting Started for development

```
cp .env.example .env
```

```
php artisan key:generate
```

```
composer install
```

```
php artisan passport:install
```

```
php artisan make:auth
```

```
php artisan migrate
```

```
php artisan db:seed
```

```
php artisan serve
```
### Getting Started for development

headers for api requests

'headers' => [

    'Accept' => 'application/json',

    'Authorization' => 'Bearer ' <accessToken>,

]


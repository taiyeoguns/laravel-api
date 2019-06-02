# Fake Data API

Application Programming Interface.

Built with PHP, Laravel and Dingo API.

## Requirements

-   PHP 7
-   [Laravel](https://laravel.com/) 5.7

## Installation

Clone Project

```sh
git clone https://github.com/taiyeoguns/laravel-api.git
```

Install Composer dependencies

```sh
composer install
```

Maintain database details in `.env` file

```sh
cp .env.example .env
```

Migrate and seed database tables

```sh
php artisan migrate && php artisan db:seed
```

Generate app key and start server

```sh
php artisan key:generate && php artisan serve
```

Launch browser

Navigate to `http://localhost:8000`

## Sample Requests

In REST client or browser, enter the following requests:

```http
http://localhost:8000/api/users
http://localhost:8000/api/users?include=addresses
```

## Documentation

Generate the documentation by running the following command:

```sh
php artisan opendox:transform
```

Thereafter, documentation is available at:

| Type    | URL                                    |
| ------- | -------------------------------------- |
| Swagger | http://localhost:8000/api/docs/swagger |
| Redoc   | http://localhost:8000/api/docs/redoc   |
| JSON    | http://localhost:8000/api/docs/json    |

## Tests

In command prompt, run:

```sh
vendor\bin\phpunit --testdox
```

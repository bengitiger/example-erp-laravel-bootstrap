# ERP Example

An example of an ERP system developed with [Laravel](https://laravel.com/), build with the preset bootstrap with the minimum of JavaScript. This is one of the projects to exemplify the Laravel presets. The projects are:

* [example-erp-laravel-bootstrap](https://github.com/afgloeden/example-erp-laravel-bootstrap)
* [example-erp-laravel-react](https://github.com/afgloeden/example-erp-laravel-react)
* [example-erp-laravel-vuejs](https://github.com/afgloeden/example-erp-laravel-vuejs)

## Technologies used

The main technologies used in this project are:

* [Bootstrap 4.1](https://getbootstrap.com/docs/4.1/)
* [Font Awesome 5](https://fontawesome.com/cheatsheet)
* [Laravel 5.7](https://laravel.com/docs/5.7)
* [PostgreSQL 10.6](https://www.postgresql.org/docs/10/static/index.html)

## Development Environment

* [Laravel Homestead](https://laravel.com/docs/5.7/homestead)

## Contributing

To contribute to the system, access the [CONTRIBUTING.md](https://github.com/afgloeden/example-erp-laravel-bootstrap/blob/master/CONTRIBUTING.md) file.

## How to use

Clone the repository

```
git clone https://github.com/afgloeden/example-erp-laravel-bootstrap.git
```

Create the .env

```
cp -v .env.example .env
```

Configuring .env, change to your settings

```
APP_URL=http://localhost

DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret
```

Dependencies of [Composer](https://getcomposer.org/doc/)

```
composer install
```

Generating the key for encryption

```
php artisan key:generate
```

Database

```
php artisan migrate
php artisan db:seed
```

Dependencies of [NPM](https://docs.npmjs.com/)

```
npm install
npm run prod
```

## Automated Testing

```
php vendor/bin/phpunit
```
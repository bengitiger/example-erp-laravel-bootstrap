# ERP Example

An example of an ERP system developed with [Laravel][laravel-link], build with the preset bootstrap and [PostgreSQL][postgresql-link] database. Other presets can be found in:

* [example-erp-laravel-react][example-erp-laravel-react-link]
* [example-erp-laravel-vuejs][example-erp-laravel-vuejs-link]

## How to use

```shell
git clone https://github.com/afgloeden/example-erp-laravel-bootstrap.git

cp -v .env.example .env
# Update .env to your settings

composer install
composer dump-autoload -o

php artisan key:generate

php artisan migrate
php artisan db:seed

npm install
npm run prod

php artisan route:cache
php artisan config:cache
```

## Tests

```shell
npm run tests
```

[laravel-link]: https://laravel.com/
[postgresql-link]: https://www.postgresql.org/docs/
[example-erp-laravel-react-link]: https://github.com/afgloeden/example-erp-laravel-react
[example-erp-laravel-vuejs-link]: https://github.com/afgloeden/example-erp-laravel-vuejs
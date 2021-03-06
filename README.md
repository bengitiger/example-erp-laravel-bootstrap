# ERP Example

An example of an ERP system developed with [Laravel][laravel-link], build with the preset bootstrap and [PostgreSQL][postgresql-link] database. Other presets can be found in:

* [example-erp-laravel-react][example-erp-laravel-react-link]
* [example-erp-laravel-vuejs][example-erp-laravel-vuejs-link]

## How to use

```shell
git clone https://github.com/afgloeden/example-erp-laravel-bootstrap.git

# Copy .env.example to .env
# Update "APP_URL", database and email settings in .env

composer install
composer dump-autoload -o

php artisan key:generate

php artisan migrate:fresh --seed

npm install
npm run prod

php artisan route:cache
php artisan config:cache
```

Now connect with `E-Mail Address: admin@admin.local` and `Password: password`.

## Tests

```shell
# Test Data
php artisan db:seed --class=TestDataSeeder # This take a while ...

# PHPUnit
npm run tests
```

> All passwords have the value `password`.

[laravel-link]: https://laravel.com/
[postgresql-link]: https://www.postgresql.org/
[example-erp-laravel-react-link]: https://github.com/afgloeden/example-erp-laravel-react
[example-erp-laravel-vuejs-link]: https://github.com/afgloeden/example-erp-laravel-vuejs

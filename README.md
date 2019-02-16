# ERP Example

An example of an ERP system developed with [Laravel][laravel-link], build with the preset bootstrap. For more information access [example-erp-laravel-ideas][example-erp-laravel-ideas-link] repository.

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
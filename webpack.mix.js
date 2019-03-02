const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
  .js('resources/js/app.js',       'public/js')
  .sass('resources/sass/app.scss', 'public/css')
  .extract([
    'jquery',
    'popper.js',
    'bootstrap',
    '@fortawesome/fontawesome-free/js/solid.js',
    '@fortawesome/fontawesome-free/js/regular.js',
    '@fortawesome/fontawesome-free/js/brands.js',
    '@fortawesome/fontawesome-free/js/fontawesome.js'
  ]);

if (mix.inProduction()) {
  mix
    .version()
    .sourceMaps()
    .options({
      purifyCss: true
    });
}

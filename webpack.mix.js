const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .extract([
      'jquery',
      'popper.js',
      'bootstrap',
      '@fortawesome/fontawesome-free/js/solid.js',
      '@fortawesome/fontawesome-free/js/regular.js',
      '@fortawesome/fontawesome-free/js/brands.js',
      '@fortawesome/fontawesome-free/js/fontawesome.js'
   ])
   .version();
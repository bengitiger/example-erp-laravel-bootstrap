try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');
    require('bootstrap');
    require('@fortawesome/fontawesome-free/js/solid.js');
    require('@fortawesome/fontawesome-free/js/regular.js');
    require('@fortawesome/fontawesome-free/js/brands.js');
    require('@fortawesome/fontawesome-free/js/fontawesome.js');
} catch (e) {
    console.log('Problems with JavaScript, please contact support. Error: ' + e);
}

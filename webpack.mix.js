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
 

mix.js('resources/js/app.js', 'public/js',
       'public/colisindex.js', 'public/incript.js',
        'public/java.js', 'public/agency.js',
        'public/agency.min.js', 'public/bootstrap.js',
        'public/contact_me.js', 'public/jqBootstrapValidation.js',
        'public/jqBoostrapValidation.js')
  .css('resources/css/app.css', 'public/log.css',
       'public/entete.css', 'public/presta.css', 
       'public/style.css', 'resources/css/entete.css',
        'public/css', 'public/agency.css',
        'public/agency.min.css', 'public/all.css',
        'public/app.css')
   .sass('resources/sass/app.scss', 'public/css');
*/
mix.js('resources/js/app.js', 'public/js',
        'resources/js/jquery.min.js', 'resources/js/jquery-migrate-3.0.1.min.js',
        'resources/js/popper.min.js', 'resources/js/bootstrap.min.js',
        'resources/js/jquery.easing.1.3.js', 'resources/js/jquery.waypoints.min.js',
        'resources/js/jquery.stellar.min.js','resources/js/owl.carousel.min.js', 'resources/js/jquery.magnific-popup.min.js',
        'resources/js/aos.js', 'resources/js/jquery.animateNumber.min.js', 'resources/js/bootstrap-datepicker.js',
        'resources/js/jquery.timepicker.min.js', 'resources/js/scrollax.min.js', 'resources/js/google-map.js',
        'resources/js/main.js')
    .css('resources/css/open-iconic-bootstrap.min.css',
         'resources/css/animate.css', 'resources/css/owl.carousel.min.css',
         'resources/css/owl.theme.default.min.css', 'resources/css/magnific-popup.css',
         'resources/css/aos.css','resources/css/ionicons.min.css',
         'resources/css/bootstrap-datepicker.css', 'resources/css/jquery.timepicker.css',
         'resources/css/flaticon.css', 'resources/css/icomoon.css', 'resources/css/style.css')
    .sass('resources/sass/app.scss', 'public/css');

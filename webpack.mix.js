const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
  .copy('./resources/assets/css/styles.css', './public/assets/css/styles.css')
  .copy('./resources/assets/js/scripts.js', './public/assets/js/scripts.js')
  .copy('./resources/assets/js/jquery.js', './public/assets/js/jquery.js')
  .copy('./resources/assets/js/jquery.inputmask.min.js', './public/assets/js/jquery.inputmask.min.js')
  .copy('./resources/assets/js/shortener.js', './public/assets/js/shortener.js')
  .copy('./resources/assets/plugins/toastr', './public/assets/plugins/toastr')

  .version();

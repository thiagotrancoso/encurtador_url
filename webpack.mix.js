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
    //----------------------------------------------------------------------
    // Admin
    //----------------------------------------------------------------------
    // AdminLte - CSS
    .copy('./node_modules/admin-lte/dist/css/adminlte.min.css', './public/assets/admin/css/adminlte.min.css')
    .copy('./node_modules/admin-lte/dist/css/adminlte.min.css.map', './public/assets/admin/css/adminlte.min.css.map')

    // AdminLte - JS
    .copy('./node_modules/admin-lte/dist/js/adminlte.min.js', './public/assets/admin/js/adminlte.min.js')
    .copy('./node_modules/admin-lte/dist/js/adminlte.min.js.map', './public/assets/admin/js/adminlte.min.js.map')

    // AdminLte - Plugin: jquery
    .copy('./node_modules/admin-lte/plugins/jquery/jquery.min.js', './public/assets/admin/plugins/jquery/jquery.min.js')
    .copy('./node_modules/admin-lte/plugins/jquery/jquery.min.map', './public/assets/admin/plugins/jquery/jquery.min.map')

    // AdminLte - Plugin: bootstrap
    .copy('./node_modules/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js', './public/assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js')
    .copy('./node_modules/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js.map', './public/assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js.map')

    // AdminLte - Plugin: icheck-bootstrap
    .copy('./node_modules/admin-lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css', './public/assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')

    // AdminLte - Plugin: Fontawesome
    .copyDirectory('./node_modules/admin-lte/plugins/fontawesome-free', './public/assets/admin/plugins/fontawesome-free')

    // AdminLte - Plugin: overlayScrollbars
    .copyDirectory('./node_modules/admin-lte/plugins/overlayScrollbars', './public/assets/admin/plugins/overlayScrollbars')

    // AdminLte - Plugin: SweetAlert2
    .copyDirectory('./node_modules/admin-lte/plugins/sweetalert2', './public/assets/admin/plugins/sweetalert2')

    // AdminLte - Plugin: bs-custom-file-input
    .copyDirectory('./node_modules/admin-lte/plugins/bs-custom-file-input', './public/assets/admin/plugins/bs-custom-file-input')

    // AdminLte - Plugin: bootstrap-switch
    .copyDirectory('./node_modules/admin-lte/plugins/bootstrap-switch', './public/assets/admin/plugins/bootstrap-switch')

    // AdminLte - Plugin: inputmask
    .copyDirectory('./node_modules/admin-lte/plugins/inputmask', './public/assets/admin/plugins/inputmask')

    // Custom CSS
    .sass('./resources/assets/admin/scss/custom.scss', './public/assets/admin/css/custom.min.css')

    // Custom JS - Page shortener-url
    .js('./resources/assets/js/shortener.js', './public/assets/admin/js/shortener.min.js')

    //----------------------------------------------------------------------
    // Other settings
    //----------------------------------------------------------------------
    .options({
        // Makes laravel-mix not process urls that are inside CSS files
        processCssUrls: false
    })

    // Enable versioning of minified files
    .version();

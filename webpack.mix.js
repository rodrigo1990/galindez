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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .styles(
    	'resources/bootstrap-3.3.7-dist/css/bootstrap.min.css','public/css/bootstrap-3.css'
    	).options({
      processCssUrls: false
        });




mix.browserSync('http://127.0.0.1:8000')
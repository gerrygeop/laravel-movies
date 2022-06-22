const mix = require('laravel-mix');
require('laravel-mix-purgecss'); //ini ditambahkan untuk prugeCss

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

// mix.js('resources/js/app.js', 'public/js');

mix.postCss('resources/css/main.css', 'public/css', [
	require('tailwindcss'),
])
.purgeCss();

// menambahkan purgecss untuk meringankan ukuran css, dengan menghapus class yang tidak terpakai
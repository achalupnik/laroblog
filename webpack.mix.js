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

 mix.js('resources/js/app.js', 'public/js/app.js').postCss('resources/css/app.css', 'public/css', [
    require('postcss-import'),
    require('tailwindcss'),
    require('autoprefixer'),
]).sass('resources/sass/app.scss', 'public/css/app-sass.css').sourceMaps();

//layout
mix.js('resources/js/side-bar.js', 'public/js/side-bar.js');
mix.styles('resources/css/admin-home.css', 'public/css/admin-home.css');
mix.styles('resources/css/categories.css', 'public/css/categories.css');
mix.styles('resources/css/loader-animation.css', 'public/css/loader-animation.css');
mix.styles('resources/css/top-bar.css', 'public/css/top-bar.css');
mix.styles('resources/css/side-bar.css', 'public/css/side-bar.css');
mix.styles('resources/css/app-main.css', 'public/css/app-main.css');


//tinyMCE
// mix.copyDirectory('node_modules/tinymce/icons', 'public/node_modules/tinymce/icons');
// mix.copyDirectory('node_modules/tinymce/plugins', 'public/node_modules/tinymce/plugins');
// mix.copyDirectory('node_modules/tinymce/skins', 'public/node_modules/tinymce/skins');
// mix.copyDirectory('node_modules/tinymce/themes', 'public/node_modules/tinymce/themes');
// mix.copy('node_modules/tinymce/jquery.tinymce.js', 'public/node_modules/tinymce/jquery.tinymce.js');
// mix.copy('node_modules/tinymce/jquery.tinymce.min.js', 'public/node_modules/tinymce/jquery.tinymce.min.js');
// mix.copy('node_modules/tinymce/tinymce.js', 'public/node_modules/tinymce/tinymce.js');
// mix.copy('node_modules/tinymce/tinymce.min.js', 'public/node_modules/tinymce/tinymce.min.js');
// mix.copy('node_modules/tinymce/langs/pl.js', 'public/node_modules/tinymce/langs/pl.js');


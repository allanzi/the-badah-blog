/**
 * Created by Dhales on 11/10/16.
 */

var elixir = require('laravel-elixir');
/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

var vendors = './node_modules/';

var scripts = [
    vendors + 'jquery/dist/jquery.min.js',
    vendors + 'material-design-lite/material.min.js',
    vendors + 'owl.carousel/dist/owl.carousel.min.js',
    './resources/assets/scripts/core.js'
];

var styles = [
    vendors + 'material-design-lite/material.min.css',
    vendors + 'owl.carousel/dist/assets/owl.carousel.min.css',
    vendors + 'owl.carousel/dist/assets/owl.theme.default.min.css',
    './resources/assets/styles/colors.css',
    './resources/assets/styles/core.css',
    './resources/assets/styles/header.css',
];

elixir(function(mix) {

    mix.scripts(scripts);

    mix.styles(styles);

    mix.copy('./resources/assets/images', 'public/images');

    mix.version([
        'css/all.css',
        'js/all.js'
    ]);

});
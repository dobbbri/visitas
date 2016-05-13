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

elixir(function(mix) {
    mix.sass([
        'app.scss'
    ],
    'public/css/app.css')

    .scripts([
        'app.js'
    ],
    'public/js/app.js')

    .scripts([
        'jquery.min.js',
        'bootstrap.min.js',
        'material.min.js',
        'nouislider.min.js',
        'autosize.min.js',
        'bootstrap-datepicker.js',
        'jquery.price_format.2.0.min.js',
        'material-kit.js',
    ],
    'public/js/vendor.js')

    .copy( "resources/assets/img/**", "public/img" )
    .copy( "resources/assets/js/**", "public/js" )
    .copy( "resources/assets/fonts/**", "public/fonts" );

    // .version([
    //     'assets/css/all.css',
    //      'assets/css/app.css',
    //     'assets/js/all.js'
    // ])

});

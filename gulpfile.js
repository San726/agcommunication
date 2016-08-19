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
    mix //.sass('app.scss')
        // .copy('bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js', 'resources/assets/js/')
        .styles([
            'datepicker.css',
            'custom.css'
        ])
        .scripts([
            'bootstrap-datepicker.js',
            'custom.js'
        ])
        .scripts('profile_control.js')
        .version([
            'css/all.css',
            'js/all.js',
            'js/profile_control.js'
        ])
});

// <head>
// <!-- ... -->
// <script type="text/javascript" src="/bower_components/jquery/jquery.min.js"></script>
//     <script type="text/javascript" src="/bower_components/moment/min/moment.min.js"></script>
//     <script type="text/javascript" src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
//     <script type="text/javascript" src="/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
//     <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css" />
//     <link rel="stylesheet" href="/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
//     </head>

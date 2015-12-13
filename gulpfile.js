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

elixir.config.sourcemaps = false;

elixir(function(mix) {
    mix.sass([
      "waves.scss",
        "app.scss",
        "main.scss"
    ],'resources/assets/css/bootstrap.css');
});


elixir(function(mix) {
  mix.styles([
      "fonts.css",
      "bootstrap.css",
      "fontello.css",
  ], 'public/css/everything.css');
});

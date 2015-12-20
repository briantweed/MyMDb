var elixir = require('laravel-elixir');

var paths = {
    'lazyload': './node_modules/jquery-lazyload/',
}

elixir.config.sourcemaps = false;

elixir(function(mix) {
   mix.sass([
      "waves.scss",
      "app.scss",
      "main.scss"
   ],'resources/assets/css/bootstrap.css')
   .styles([
      "fonts.css",
      "bootstrap.css",
      "fontello.css",
   ], 'public/css/mymdb.css')
   .scripts([
      "jquery.js",
      "bootstrap.js",
      "waves.js",
      "autosize.js",
      paths.lazyload + "jquery.lazyload.js",
      paths.lazyload + "jquery.scrollstop.js",
      "setup.js",
   ], 'public/js/mymdb.js')
   .version([
      'public/css/mymdb.css',
      'public/js/mymdb.js'
   ]);
});

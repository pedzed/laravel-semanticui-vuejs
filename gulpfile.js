var elixir = require('laravel-elixir');
require('laravel-elixir-imagemin');
require('laravel-elixir-vueify');

elixir.config.sourcemaps = false;
elixir.config.js.folder = '';
elixir.config.css.less.folder = '';

elixir(function(mix) {
    mix.browserify('js/main.js', 'public/js/main.js');
    mix.less('less/main.less', 'public/css/main.css');
    mix.imagemin();
});

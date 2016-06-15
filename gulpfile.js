var elixir = require('laravel-elixir');
require('laravel-elixir-imagemin');

elixir(function(mix) {
    mix.sass('app.scss');
    mix.imagemin();
});

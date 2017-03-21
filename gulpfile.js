const elixir = require('laravel-elixir');
const path = require('path');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir((mix) => {

    Elixir.webpack.mergeConfig({
        module: {
            loaders: [{
                test: /\.jsx?$/,
                loader: 'babel',
                exclude: /node_modules(?!\/(vuetable-2))/
            }]
        }
    });

    mix.sass('app.scss')
       .webpack('app.js')
       // .copy('node_modules/bootstrap-sass/assets/fonts/bootstrap/','public/fonts/bootstrap');

});

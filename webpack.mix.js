let mix = require('laravel-mix')
let path = require('path');

mix.setPublicPath('dist')
    .js('resources/js/card.js', 'js')
    .sass('resources/sass/card.scss', 'css')
    .webpackConfig({
        resolve: {
            symlinks: false            
        },
    })

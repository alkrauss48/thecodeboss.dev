// webpack.mix.js

let mix = require('laravel-mix');

mix.sass('src/sass/app.scss', 'app/dist')
    .copy('src/fonts', 'app/dist/fonts')
    .options({
        processCssUrls: false
    });

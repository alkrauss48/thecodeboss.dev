// webpack.mix.js

let mix = require('laravel-mix');

mix.sass('src/sass/app.scss', 'app/dist')
    .combine([
            'src/js/globals/*',
            'src/js/vendor/*',
            'src/js/lib/*',
        ],
        'app/dist/app.js',
    )
    .copy('src/fonts', 'app/dist/fonts')
    .options({
        processCssUrls: false
    });

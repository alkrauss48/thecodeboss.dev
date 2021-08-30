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
    .copy('src/documents', 'app/dist/documents')
    .copy('src/images', 'app/dist/images')
    .copy('src/artifacts', 'app/dist')
    .options({
        processCssUrls: false
    });

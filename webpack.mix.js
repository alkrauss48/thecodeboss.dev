// webpack.mix.js

let mix = require('laravel-mix');

mix.sass('src/sass/app.scss', 'dist')
    .combine([
            'src/js/vendor/*',
            'src/js/lib/*',
        ],
        'dist/app.js',
    )
    .copy('src/fonts', 'dist/fonts')
    .copy('src/documents', 'dist/documents')
    .copy('src/images', 'dist/images')
    .copy('src/artifacts', 'dist')
    .options({
        processCssUrls: false
    });

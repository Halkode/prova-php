const mix = require("laravel-mix");

require('laravel-mix-eslint');

mix.options({
    publicPath: "public",
    processCssUrls: false
});

mix.js("resources/js/app.js", "public/assets/js")
    .eslint({
        fix: true,
        extensions: ['js']
    });

mix.postCss("resources/css/app.css", "public/assets/css", [require("tailwindcss")]);

mix.disableNotifications();


if (!mix.inProduction()) mix.browserSync({
    hot: true,
    ui: false,
    open: true,
    watch: true,
    https: false,
    files: [
        './**/*.php',
        './public/assets/**/*.*',
    ],
    port: 3000,
    host: '0.0.0.0',
    proxy: {
        target: 'http://localhost:8000',
        ws: true
    }
})
// 예제 6-9 mix.version() 메서드

let mix = require('laravel-mix');

mix.sass('resources/sass/app.scss', 'public/css')
  .version();

// 예제 6-3 믹스에서 소스맵 생성 활성화하기

let mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
  .sourceMaps();

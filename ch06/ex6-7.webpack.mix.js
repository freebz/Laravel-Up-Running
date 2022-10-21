// 예제 6-7 믹스를 사용해 자바스크립트 합치기

let mix = require('laravel-mix');

// resources/js 디렉터리의 모든 파일 하나로 합치기
mix.scripts('resources/js', 'public/js/all.js');

// resources/js 디렉터리의 일부 파일을 하나로 합치기
mix.scripts([
  'resources/js/normalize.js',
  'resources/js/app.js'
], 'public/js/all.js');

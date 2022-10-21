// 예제 6-14 .env 파일의 환경 변수를 웹팩에서 사용하기

// webpack.mix.js
let mix = require('laravel-mix');
require('dotenv').config();

let isProduction = process.env.MIX_ENV === "production";

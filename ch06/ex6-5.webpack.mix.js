// 예제 6-5 PostCSS를 사용한 CSS 후처리

mix.sass('resources/sass/app.scss', 'public/css')
  .options({
    postCss: [
      require('postcss-css-variables')()
    ]
  });

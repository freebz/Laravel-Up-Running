// 예제 6-12 벤더 라이브러리를 별도의 파일로 분리하는 방법

mix.js('resources/js/app.js', 'public/js')
  .extract(['vue'])

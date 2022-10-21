// 예제 6-6 믹스를 사용해 스타일시트 합치기

// resources/css 디렉터리의 모든 파일 하나로 합치기
mix.styles('resources/css', 'public/css/all.css');

// resources/css 디렉터리의 일부 파일 하나로 합치기
mix.styles([
  'resources/css/normalize.css',
  'resources/css/app.css'
], 'public/css/all.css');

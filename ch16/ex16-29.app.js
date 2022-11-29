// 예제 16-29 app.js와 bootstrap.js에서 에코 초기화하기

// app.js
require('./bootstrap');

// ... 다수의 Vue 관련 코드 ...

// 여기에 에코 바인딩을 추가

// bootstrap.js
import Echo from "laravel-echo";

window.Echo = new Echo({
  broadcaster: 'pusher',
  key: process.env.MIX_PUSHER_APP_KEY,
  cluster: process.env.MIX_PUSHER_APP_CLUSTER
});

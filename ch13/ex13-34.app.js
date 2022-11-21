// 예제 13-34 app.js로 패스포트의 Vue 컴포넌트 불러들이기

require('./bootstrap');

window.Vue = require('vue');

Vue.component(
  'passport-clients',
  require('./components/passport/Clients.vue').default
);

Vue.component(
  'passport-authorized-clients',
  require('./components/passport/AuthorizedClients.vue').default
);

Vue.component(
  'passport-personal-access-tokens',
  require('./components/passport/PersonalAccessTokens.vue').default
);

const app = new Vue({
  el: '#app'
});

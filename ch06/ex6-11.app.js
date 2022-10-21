// 예제 6-11 Vue를 사용할 때의 App.js 설정

window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
  el: '#app'
});

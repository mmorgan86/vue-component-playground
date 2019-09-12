require('./bootstrap');

window.Vue = require('vue');
Vue.component('scroll-link', require('./components/ScrollLink.vue').default);

new Vue({
   el: '#app'
});

require('./bootstrap');
import ScrollLink from "./components/ScrollLink";
import Dropdown from "./components/Dropdown";

window.Vue = require('vue');

Vue.component('scroll-link', ScrollLink);
Vue.component('dropdown', Dropdown);

new Vue({
   el: '#app'
});

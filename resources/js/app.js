import Vue from 'vue';

import ScrollLink from "./components/ScrollLink";
import Dropdown from "./components/Dropdown";
import Visible from "./components/Visible";
import Modal from "./plugins/modal/ModalPlugin";

window.Vue = Vue;

Vue.use(Modal);

Vue.component('scroll-link', ScrollLink);
Vue.component('dropdown', Dropdown);
Vue.component('visible', Visible);

new Vue({
   el: '#app'
});

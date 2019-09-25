import Vue from 'vue';

import ScrollLink from "./components/ScrollLink";
import Dropdown from "./components/Dropdown";
import Visible from "./components/Visible";
import Modal from "./plugins/modal/ModalPlugin";
import ConfirmDialog from "./components/ConfirmDialog";
import ConfirmButton from "./components/ConfirmButton";

window.Vue = Vue;

Vue.use(Modal);

Vue.component('scroll-link', ScrollLink);
Vue.component('dropdown', Dropdown);
Vue.component('visible', Visible);
Vue.component('confirm-dialog', ConfirmDialog);
Vue.component('confirm-button', ConfirmButton);

new Vue({
   el: '#app',

    methods: {
       confirm(message) {
           this.$modal.dialog(message)
               .then(confirmed =>  {
                   confirmed ? alert('Proceed') : alert('Canceled');
               });
       }
    }
});

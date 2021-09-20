require('./bootstrap');

import Vue from 'vue';
import Vuex from 'vuex';
import VueResource from 'vue-resource';
Vue.use(Vuex);
Vue.use(VueResource);
// window.Vue = require('vue').default;
// import Vuex from 'vuex';
//Vue.use(require('vuex').default);

Vue.component('galery-component', require('./components/GaleryComponent.vue').default);

const app = new Vue({
    el: '#app',
});

console.log(app);

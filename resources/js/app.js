require('./bootstrap');

import Vue from 'vue';
Vue.component('App', () => import('./views/App.vue'));
new Vue({
    el: '#app',
})

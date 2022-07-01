import Vue from 'vue';
import axios from 'axios';
import Routes from './routes';
import VueRouter from 'vue-router';
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'

require('bootstrap');

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
  axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
}

Vue.use(VueRouter);

// Make BootstrapVue available throughout your project
Vue.use(BootstrapVue)
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin)

window.Binoculars.basePath = '/' + window.Binoculars.path;

let routerBasePath = window.Binoculars.basePath + '/';

if (window.Binoculars.path === '' || window.Binoculars.path === '/') {
  routerBasePath = '/';
  window.Binoculars.basePath = '';
}

const router = new VueRouter({
  routes: Routes,
  mode: 'history',
  base: routerBasePath,
});

new Vue({
  el: '#binoculars',

  router,

  data() {
    return {

    };
  },

  methods: {

  },
});
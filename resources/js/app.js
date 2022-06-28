import Vue from 'vue';
import axios from 'axios';
import Routes from './routes';
import VueRouter from 'vue-router';

require('bootstrap');

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
  axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
}

Vue.use(VueRouter);

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
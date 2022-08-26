import Vue from 'vue';
import axios from 'axios';
import Routes from './routes';
import VueRouter from 'vue-router';
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
import { library } from '@fortawesome/fontawesome-svg-core'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import { faUserSecret } from '@fortawesome/free-solid-svg-icons'

library.add(faUserSecret)
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

Vue.component('font-awesome-icon', FontAwesomeIcon)
Vue.config.productionTip = false

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

Vue.component('sidebar', require('./components/sidebar.vue').default);
Vue.component('table-naviguation', require('./components/table-naviguation.vue').default);
Vue.component('table-datas', require('./screens/table/datas.vue').default);
Vue.component('table-structure', require('./screens/table/structure.vue').default);

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
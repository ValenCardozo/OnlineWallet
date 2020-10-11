require('./bootstrap');
window.Vue = require('vue');

Vue.component('Home', require('../views/Home.vue').default);

import Chartkick from 'vue-chartkick';
import Chart from 'chart.js';

Vue.use(Chartkick.use(Chart));

const app = new Vue({
  el: '#app',
});

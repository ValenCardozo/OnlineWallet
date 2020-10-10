require('./bootstrap');
window.Vue = require('vue');

import Chartkick from 'vue-chartkick';
import Chart from 'chart.js';

Vue.component('example-component', require('./components/Inicio.vue').default);
Vue.use(Chartkick.use(Chart));

const app = new Vue({
  el: '#app',
});


/**
* First we will load all of this project's JavaScript dependencies which
* includes Vue and other libraries. It is a great starting point when
* building robust, powerful web applications using Vue and Laravel.
*/

require('../bootstrap');
require('../plugins');

import VueResource from "vue-resource"

window.Vue = require('vue');

Vue.use(VueResource);

Vue.component('comment', require('./components/Comments.vue'));

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
  el: '#app'
});

// Loaded after CoreUI app.js

import VueResource from "vue-resource"

window.Vue = require('vue');

Vue.use(VueResource);

Vue.component('comment', require('./components/Comments.vue'));

const app = new Vue({
    el: '#app'
});

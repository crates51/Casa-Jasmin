require('./bootstrap');
require('./costum');

window.Vue = require('vue');

// Vue.component('App', require('./App.vue'));
// Vue.component('Facilities', require('./components/Facilities.vue'));
Vue.component('Thumbnail', require('./components/Thumbnail.vue'));

const app = new Vue({
    el: '#app',
});

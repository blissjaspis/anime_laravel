require('./bootstrap');

window.Vue = require('vue');

Vue.component('dropdown', require('./components/_partials/Dropdown.vue'));
Vue.component('video-gue', require('./components/VideoGue.vue'));

const app = new Vue({
    el: '#app'
});


require('./bootstrap');

window.Vue = require('vue');

Vue.component('thought-component', require('./components/ThoughtComponent.vue'));

const app = new Vue({
    el: '#app'
});

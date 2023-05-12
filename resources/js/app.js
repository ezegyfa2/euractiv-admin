require('./bootstrap');

window.Vue = require('vue').default

require('euractiv-admin-vue-components').default.install(Vue);

const app = new Vue({
    el: '#app',
});

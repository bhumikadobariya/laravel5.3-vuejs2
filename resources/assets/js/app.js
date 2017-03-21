//This is the main js file for vueJs and this is linked with the app.blade.php file.
//when the page is loaded from laravel this file will build and vuejs components are render from vue Instance.
//This file having router file which contains all routes of vuejs(front-end)
//And also contains the App.vue file which renders the all other components.
import bootstrap from './bootstrap';
import VueResource from 'vue-resource';
import Vue from 'vue'
import App from './components/app.vue';
import router from './router'
import VueHead from 'vue-head'
import store from './store'
import VueEvents from 'vue-events'

var vueFilter = require('vue-filter');
Vue.use(vueFilter);

Vue.use(VueHead)

Vue.use(VueResource);

Vue.http.headers.common['X-CSRF-TOKEN'] = $('meta[name="csrf-token"]').attr('content');

Vue.use(VueEvents)

const app = new Vue({
    el: '#app',
    store,
    router,
    render: h => h(App),
})

//require('./bootstrap');


import Vue from 'Vue';
import router from "./router.js"
import VueRouter from "vue-router";
import VueMaterial from 'vue-material'
import Vuex from 'vuex'
import axios from 'axios'

//css
import 'vue-material/dist/vue-material.min.css'
import 'vue-material/dist/theme/default.css'


Vue.prototype.$eventHub = new Vue();

axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
axios.defaults.headers.common['X-CSRF-TOKEN'] = document
    .querySelector('meta[name="csrf-token"]')
    .getAttribute("content");
Vue.prototype.$axios = axios
//imports
Vue.use(VueMaterial)
Vue.use(Vuex)
Vue.use(VueRouter)

//main router page
import App from "./App.vue";

const app = new Vue({
    el: '#app',
    router,
    render: h => h(App)
});
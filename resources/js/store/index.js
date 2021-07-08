import Vue from "vue";
import Vuex, { Store } from "vuex";
import user from "./user";
Vue.use(Vuex);

export default new Store({
    modules: {
        user
    },
    strict: process.env.NODE_ENV !== "production"
});
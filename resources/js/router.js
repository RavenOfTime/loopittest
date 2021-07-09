
import VueRouter from "vue-router";
import Vue from 'vue'


Vue.use(VueRouter)


const Login = () => import(/* webpackChunkName: "login" */ "./Pages/login");
const Dashboard = () => import(/* webpackChunkName: "dash" */ "./Pages/dashboard");


const router = new VueRouter({
    routes: [
        { path: '/', component: Login },
        { path: '/dashboard', component: Dashboard },
    ],
    mode: 'history',
})

export default router;
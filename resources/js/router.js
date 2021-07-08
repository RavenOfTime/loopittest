
import VueRouter from "vue-router";
import Vue from 'vue'


Vue.use(VueRouter)


const Login = () => import(/* webpackChunkName: "login" */ "./Pages/login");
// const QuizPage = () => import(/* webpackChunkName: "dash" */ "./mock/Page/QuizPage");


const router = new VueRouter({
    routes: [
        { path: '/', component: Login },
    ],
    mode: 'history',
})

export default router;
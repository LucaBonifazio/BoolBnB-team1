require("./common");

import Vue from 'vue';
import App from './App.vue';
import VueRouter from 'vue-router';
import PageHome from './pages/PageHome';

Vue.use(VueRouter);

const routes = [
    {
        path: '/',
        name: 'homepage',
        component: PageHome,
    },
];

const router = new VueRouter({
    mode: 'history',
    routes,
});

new Vue({
    el: '#app',
    render: h => h(App),
    router
});

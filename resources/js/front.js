require("./common");

import Vue from 'vue';
import App from './App.vue';
import VueRouter from 'vue-router';
import PageHome from './pages/PageHome';
import ApartmentPage from './pages/ApartmentPage';
import AdvancedSearchPage from './pages/AdvancedSearchPage';

Vue.use(VueRouter);

const routes = [
    {
        path: '/',
        name: 'homepage',
        component: PageHome,
    },
    {
        path: '/apartments',
        name: 'apartments',
        component: ApartmentPage,
    },
    {
        path: "/advanced-search",
        name: "advanced-search",
        component: AdvancedSearchPage,
    },
];

// personalizzazione del vue-router
const router = new VueRouter({
    mode: 'history',
    routes,
});

new Vue({
    el: '#app',
    render: h => h(App),
    router
});

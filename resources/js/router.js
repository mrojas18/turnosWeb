import {createRouter, createWebHistory}  from 'vue-router';

import Home from './pages/Home.vue';
import About from './pages/About.vue';

const routes = [
    {
        path: '/',
        name: 'home',
        component: Home
    },
    {
        path: '/home',
        name: 'home',
        component: Home
    },
    {
        path: '/about',
        name: 'about',
        component: About
    },
]

const router = new createRouter({
    mode: 'history',
    history: createWebHistory(),
    linkExactActiveClass: 'active',
    routes
});

export default router;

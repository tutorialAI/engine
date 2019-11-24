import Vue from 'vue'
import VueRouter from 'vue-router'
import axios from 'axios';

import App from './components/App.vue'
import Dashboard from './components/Dashboard.vue'
import Sidebar from './components/Sidebar.vue'
import SiteList from './components/SiteList.vue'
import Users from './components/Users.vue'
import Video from './components/Video.vue'

Vue.use(VueRouter)

const router = new VueRouter({
  mode: 'history',
  routes: [
    {
        path: '/admin/sites',
        name: 'site-list',
        component: SiteList
    },
    {
        path: '/admin/users',
        name: 'users',
        component: Users
    },
    {
        path: '/admin/video',
        name: 'video',
        component: Video
    },
    ]
 });   

const app = new Vue({
    el: '#app',
    components: { Dashboard, Sidebar },
    router,
    axios
});

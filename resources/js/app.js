import Vue from 'vue'
import VueRouter from 'vue-router'
import axios from 'axios';

import App from './components/App.vue'
import Dashboard from './components/Dashboard.vue'
import Sidebar from './components/Sidebar.vue'
import SiteList from './components/SiteList.vue'

Vue.use(VueRouter)

const router = new VueRouter({
  mode: 'history',
  routes: [
    {
        path: '/admin/sites',
        name: 'site-list',
        component: SiteList
    }]
 });   

const app = new Vue({
    el: '#app',
    components: { Dashboard, Sidebar },
    router,
    axios
});

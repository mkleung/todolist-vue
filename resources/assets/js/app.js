/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue'
import VueRouter from 'vue-router'
import Buefy from 'buefy'
import 'buefy/dist/buefy.css';

Vue.use(Buefy)

Vue.use(VueRouter)

let dashboard = require('./components/Dashboard.vue');
let myProfile = require('./components/Profile.vue');


let welcome  = require('./components/Welcome.vue');

let appheader = require('./components/AppHeader.vue');
let appfooter = require('./components/AppFooter.vue');

const routes = [
  { path: '/', component: welcome },
  { path: '/dashboard', component: dashboard },
  { path: '/profile', component: myProfile }
]
const router = new VueRouter({
  mode: 'history',
  routes: routes,

})

const app = new Vue({
    el: '#app',
    router,
    components:{appheader, dashboard, appfooter, myProfile}
});
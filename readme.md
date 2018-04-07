# Installation

> composer create-project --prefer-dist laravel/laravel dailymoneymaster "5.4.*"


> npm install vue-router --save

> npm install bulma --save

> npm install font-awesome

> npm install (this will install everything in package.json file)


### Remove bootstrap 4

Inside resources/assets/sass/app.scss
@import "~bulma/bulma";

Inside resources/assets/js/bootstrap.js
Remove require('bootstrap-sass');

# Run the project

> npm run watch (this will compile the project whenever you change something)

> php artisan serve

### Inside app.js

```
require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)

let Myheader = require('./components/Myheader.vue');

let Home = require('./components/Home.vue');
let About = require('./components/About.vue');

const routes = [
  { path: '/home', component: Home },
  { path: '/about', component: About }
]

const router = new VueRouter({
  // mode: 'history',
  routes
})

const app = new Vue({
    el: '#app',
    router,
    components:{Myheader}
});
```

https://www.youtube.com/watch?v=JDnYobhaScg&list=PLe30vg_FG4OSl8zlikYc_RLkfueqAMUb_&index=10

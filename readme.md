# Running the app locally

Goto and fill in the database credentials https://github.com/laravel/laravel/blob/master/.env.example

> php artisan key:generate



# Installation

> composer create-project --prefer-dist laravel/laravel dailymoneymaster "5.4.*"


> npm install vue-router --save

> npm install bulma --save

> npm install font-awesome

> npm install buefy --save

> npm install

(this will install everything in package.json file)

### Remove bootstrap 4, import font awesome and bulma

Inside resources/assets/sass/app.scss, remove bootstrap and add the folloing

```
@import "~bulma/bulma";
@import "~font-awesome/scss/font-awesome";
```

Inside resources/assets/js/bootstrap.js, remove the following

```
require('bootstrap-sass');
```

### Importing Bulma and vue

Inside welcome.blade.php, add the following code


```
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<div id="app">
  <example></example>
</div>
<script src="{{ asset('js/app.js')}}"></script>
```

### Add vue routes and declare components

Inside app.js


```
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
```

### Setup database

Inside .env file, add your db credentials inside
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret
```

Create a database and then migrate

```
php artisan migrate
```


# Running the project

> npm run dev

> npm run watch (this will compile the project whenever you change something)

> php artisan serve


# Errors

The only supported ciphers are AES-128-CBC and AES-256-CBC with the correct key lengths.

> php artisan key:generate

> php artisan config:clear



### To run the application on your machine, clone and then npm install 


### Heroku

https://medium.com/@Oriechinedu/how-to-host-a-laravel-app-with-mysql-database-on-heroku-ab56b08be735

> git push heroku master

> heroku open

Reference:
https://www.youtube.com/watch?v=JDnYobhaScg&list=PLe30vg_FG4OSl8zlikYc_RLkfueqAMUb_&index=10

https://favicon.io/emoji-favicons


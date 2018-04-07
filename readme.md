# Installation

> composer create-project --prefer-dist laravel/laravel dailymoneymaster "5.4.*"


> npm install vue-router --save

> npm install bulma --save

> npm install font-awesome

> npm install

(this will install everything in package.json file)


### Remove bootstrap 4

Inside resources/assets/sass/app.scss
@import "~bulma/bulma";

Inside resources/assets/js/bootstrap.js
Remove require('bootstrap-sass');

### Importing Bulma and vue

Inside welcome.blade.php

Add this inside head
```<link rel="stylesheet" href="{{ asset('css/app.css') }}">```

Add this inside body
```<div id="app">
  <example></example>
</div>
<script src="{{ asset('js/app.js')}}"></script>```

### Add vue routes and declare components

```
require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)

let example = require('./components/Example.vue');

const routes = [
  { path: '/', component: example },
]
const router = new VueRouter({
  // mode: 'history',
  routes
})

const app = new Vue({
    el: '#app',
    router,
    components:{example}
});
```


### Setup database

Inside .env file, add yoour db credentials inside
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret```


# Running the project

> npm run dev

> npm run watch (this will compile the project whenever you change something)

> php artisan serve



https://www.youtube.com/watch?v=JDnYobhaScg&list=PLe30vg_FG4OSl8zlikYc_RLkfueqAMUb_&index=10

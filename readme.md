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


### To run the application on your machine, clone and then npm install 


Reference:
https://www.youtube.com/watch?v=JDnYobhaScg&list=PLe30vg_FG4OSl8zlikYc_RLkfueqAMUb_&index=10

https://favicon.io/emoji-favicons
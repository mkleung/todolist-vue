# Installation

> composer create-project --prefer-dist laravel/laravel dailymoneymaster "5.4.*"
> npm install vue-router --save
> npm install bulma --save
> npm install font-awesome
> npm install (this will install everything in package.json file)

# Remove bootstrap 4

Inside resources/assets/sass/app.scss, replace bootstrap
@import "~bulma/bulma";

Inside resources/assets/js/bootstrap.js
Remove require('bootstrap-sass');

# Configure database

Inside env file,
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=todo
DB_USERNAME=root
DB_PASSWORD=root
```

# Migrations

> php artisan make:migration create_item_table

```
Schema::create('flights', function (Blueprint $table) {
    $table->increments('id');
    $table->string('name');
    $table->string('airline');
    $table->timestamps();
});
```

> php artisan migrate

# Run the project

> npm run watch (this will compile the project whenever you change something)

> php artisan serve


https://www.youtube.com/watch?v=JDnYobhaScg&list=PLe30vg_FG4OSl8zlikYc_RLkfueqAMUb_&index=10

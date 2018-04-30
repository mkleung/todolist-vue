<template>
<nav class="navbar is-transparent">
  <div class="navbar-brand">
    <a class="navbar-item" href="">
      
    </a>
    <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>

  <div id="navbarExampleTransparentExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item" href="#">
        <span>To Do List</span>
      </a>
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="field is-grouped">
            <p class="control">
                <!-- <a class="button is-info" href="">
                <span class="icon">
                    <i class="fa fa-thumbs-up"></i>
                </span>
                <span>Signup</span>
                </a> -->
                <register></register>
            </p>
            <p class="control">
                <!-- <a class="button is-primary" href="">
                <span class="icon">
                    <i class="fa fa-location-arrow"></i>
                </span>
                <span>Login</span>
                </a> -->
                <login></login>
            </p>
        </div>
      </div>
    </div>
  </div>
</nav>
</template>


<script>

    let login = require('./Login.vue');
    let register = require('./Register.vue');

    export default {
        components: {login, register},
        data() {
            return {
      
            }
        },
        methods: {
           
        }
    }
</script>

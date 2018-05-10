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
                <register></register>
            </p>
            <p class="control">
                <login></login>

                <button @click="check">check</button>
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
           check() {
              axios.get('/sessionStatus')
              .then(response => {
                  console.log(response.data.user);
              })
              .catch(error => {
                  console.log(error.response.data);
              });
           }
        }
    }
</script>

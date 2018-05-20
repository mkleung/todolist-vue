<template>
<nav class="navbar is-fixed-top has-shadow">
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
        <h1>Coffee To Do</h1>
      </a>
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="field is-grouped" v-if="userLogin">
            <p class="control">
                <button class="button is-info" @click="logoutUser">Logout</button>
    
            </p>

        </div>
        <div  class="field is-grouped" v-else>
              <p class="control">
                  <register :welcome="welcome"></register>
              </p>
              <p class="control">
                  <login2></login2>
              </p>
        </div>

      </div>
    </div>
  </div>
</nav>
</template>


<script>

    //let login = require('./Login.vue');
    let login2 = require('./Login2.vue');
    let register = require('./Register.vue');

    export default {
        components: {register, login2},
        data() {
            return {
              userLogin: false,
              welcome: false
            }
        },
        mounted: function() {
       
              axios.get('/sessionStatus')
              .then(response => {
                  if (response.data.user) {
                    this.userLogin = response.data.user;
                  }
              })
              .catch(error => {
                  console.log(error.response.data);
              });
           

        },
        methods: {
           logoutUser: function() {
             axios.get('/logoutUser')
              .then(response => {
                  this.userLogin = false;

                  this.$snackbar.open({
                      message: 'You have been logged out',
                      type: 'is-success',
                      position: 'is-top',
                      duration: 3000,
                      indefinite: false
                  })

                  this.$router.replace('/')

              })
              .catch(error => {
                  console.log(error.response.data);
              });
           }
        }
    }
</script>

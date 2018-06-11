<template>
  <nav class="navbar is-transparent is-fixed-top">
    <div class="navbar-brand">
        <a class="navbar-item" href="https://bulma.io">
            Coffee To Do
        </a>
      <div class="navbar-burger burger" @click="toggleMenu" :class="{'is-active': navIsActive}" data-target="mainNav">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>

    <div id="mainNav" class="navbar-menu" :class="{'is-active': navIsActive}">
      <div class="navbar-end">

        <!-- logged in -->
        <div class="navbar-item has-dropdown is-hoverable" v-if="userLogin">
            <a class="navbar-link">
              Profile
            </a>
            <div class="navbar-dropdown">
              <a class="navbar-item">
                Settings
              </a>
              <a class="navbar-item" @click="logoutUser">
                Logout
              </a>
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
    name: 'navbar',
    components: {register, login},
    data () {
      return {
        navIsActive: false,
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
      toggleMenu: function () {
        this.navIsActive = !this.navIsActive
      },
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
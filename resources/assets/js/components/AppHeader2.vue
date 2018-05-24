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
        <a class="navbar-item" href="https://bulma.io/">
          Home
        </a>
        <a class="navbar-item" href="">
            Test
        </a>
      </div>
    </div>
  </nav>
</template>

<script>
  export default {
    name: 'navbar',
    data () {
      return {
        navIsActive: false
      }
    },
    methods: {
      toggleMenu: function () {
        this.navIsActive = !this.navIsActive
      }
    }
  }
</script>

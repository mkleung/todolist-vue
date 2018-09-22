<template>


<section >
    <div class="hero is-large is-bold">
        <div class="hero-body">
            <div class="container">
                <div class="column is-4 is-offset-4 has-text-centered welcome__container">
                    <h1 class="title">
                        CoffeeToDo
                    </h1>
                    <h2 class="subtitle ">
                        To Do List over coffee
                    </h2>

                    <register :welcome="welcome"></register>
                    
                </div>
            </div>
        </div>
    </div>

</section>

</template>


<script>

    let login = require('./Login.vue');
    let register = require('./Register.vue');

    export default {
        components: {register, login},
        data() {
            return {
              userLogin: false,
              welcome: true
            }
        },
        methods: {
          
        }
    }
</script>


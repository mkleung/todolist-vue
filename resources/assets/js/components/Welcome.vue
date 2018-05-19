<template>


<section >
    <div class="hero is-large is-bold">
        <div class="hero-body">
            <div class="container">
                <div class="column is-6 is-offset-3 has-text-centered ">
                    <h1 class="title">
                        CoffeeToDo
                    </h1>
                    <h2 class="subtitle ">
                        Meet over coffee and to do list
                    </h2>
                   
                    <register :welcome="welcome"></register>
                </div>
            </div>
        </div>
    </div>

    <div class="hero is-primary">
        <div class="hero-body">
            <div class="container">
                <div class="columns">
                    <div class="column is-4  has-text-centered">
                        <p class="title">
                            For work addicts
                        </p>
                        <img :src="'/img/coffee1.jpg'" >
                    </div>

                    <div class="column is-4  has-text-centered">
                        <p class="title">
                            Who need to get things done
                        </p>
                        <img :src="'/img/coffee2.jpg'" >
                    </div>

                    <div class="column is-4  has-text-centered">
                        <p class="title">
                           Meet with other coffee lovers
                        </p>
                        <img :src="'/img/coffee3.jpg'" >
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>

</template>


<script>

    let register = require('./Register.vue');

    export default {
        components: {register},
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


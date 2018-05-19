<template>


<section >
    <div class="hero is-medium is-bold">
        <div class="hero-body">
            <div class="container">
                <div class="column is-6 is-offset-3 has-text-centered ">
                    <h1 class="title">
                        CoffeeToDo
                    </h1>
                    <h2 class="subtitle ">
                        Coffee dates with people who love to do lists
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
                          With other people
                        </p>
                        <img :src="'/img/coffee3.jpg'" >
                    </div>
                </div>
            </div>
        </div>
    </div>


        <div class="hero is-bold">
            <div class="hero-body">
                <div class="container is-fluid">
                    <div class="columns ">

                            <div class="column is-6 has-text-right">
                                <h1 class="title">
                                    Anyone can join in
                                </h1>
                                <p>Productivity junkies who want to meet similarly minded people</p>
                            </div>

                            <div class="column is-3">
                                <figure class="image ">
                                    <img :src="'/img/coffee4.jpg'" >
                                </figure>
                            </div>

                    </div>
                </div>
            </div>
        </div>



        <div class="hero is-light">
            <div class="hero-body">
                <div class="container is-fluid">
                     <div class="columns">
                         <div class="column is-3 is-offset-3">
                            <figure class="image ">
                                <img :src="'/img/coffee5.jpg'">
                            </figure>
                        </div>

                        <div class="column is-6">
                            <h1 class="title">
                                You need help in something?
                            </h1>
                            <p>Collaborate and do things</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>




        <div class="hero is-small is-bold">
            <div class="hero-body">
                <div class="container">
                    <div class="column is-6 is-offset-3 has-text-centered ">
                        <h1 class="title">
                            It's free forever
                        </h1>
                        <h2 class="subtitle ">
                            Meet someone over coffee and get things done
                        </h2>
                        <register :welcome="welcome"></register>
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


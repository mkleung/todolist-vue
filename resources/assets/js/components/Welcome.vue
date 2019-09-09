<template>


<section >
    <div class="hero is-large is-bold">
        <div class="hero-body">
            <div class="container">
                <div class="column is-6 is-offset-3 has-text-centered welcome__container">
                    <h1 class="title">
                        ATOMIC TO DO
                    </h1>
                    <br />
                    <h2 class="subtitle ">
                        A todo list for productive people.
                    </h2>
                    <div>
                        <div>- Timer for each task</div>
                        <div>- User authentication</div>
                        <div>- Calendar Component</div>
                    </div>
                    <br />
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


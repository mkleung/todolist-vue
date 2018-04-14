<template>

<section class="hero is-primary is-bold">
  <div class="hero-body">
        <div class="container">
            <div class="column is-6 is-offset-3">
                
                <h1 class="title has-text-centered">To Do List</h1>
                
                <div class="card">
                    <div class="card-content">
                        <p class="subtitle has-text-black">Use the list below to get things done</p>
                        <addTask></addTask>
                    </div>
                    <div class="card-content">
                        <tiles></tiles>
                    </div>
                    
                </div>
                    
            </div>
        </div>
  </div>
</section>

</template>

<script>

    let tiles = require('./Tiles.vue');
    let addTask = require('./AddTask.vue');

    export default {
        components: {tiles, addTask},
        data() {
            return {
                list:[]
            }
        },
        mounted(){
            this.init()
        },

        methods: {
            init(){
                this.list = this.$children.list;
            }
        }
    }
</script>

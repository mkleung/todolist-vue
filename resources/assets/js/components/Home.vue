<template>

<section class="hero is-primary is-bold">
  <div class="hero-body">
        <div class="container">
            <div class="column is-6 is-offset-3">
                
                <h1 class="title has-text-centered">To Do List App</h1>
               
                <div class="card">
                    <div class="card-content">
                        <p class="subtitle has-text-black">Add a task below and click save</p>
                        <addTask></addTask>
                       
                    </div>
                    <div class="card-content">
                        
                    </div>
                    <div class="card-content">
                        <tiles :list="list"></tiles>
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
    let searchTask = require('./SearchTask.vue');

    export default {
        components: {tiles, addTask, searchTask},
        data() {
            return {
                list: []
            }
        },
        mounted(){
            this.init()
            },
        methods: {
            init(){
                axios.get('getTasks')
                    .then((response)=>{
                        var taskList = response.data;
                        this.list = response.data;
                    })
                    .catch((error) => this.errors = error.response.data);
            }
        }
    }
</script>

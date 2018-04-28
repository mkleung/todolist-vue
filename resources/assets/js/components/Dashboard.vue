<template>

<section class="hero is-primary is-bold">
  <div class="hero-body">
        <div class="container">
            <div class="column is-6 is-offset-3">
                
                <h1 class="title has-text-centered">To Do List</h1>
               
                <div class="card">
                    <div class="card-content">
                        <p class="subtitle has-text-black">Add a task below and click save</p>
                        <addTask></addTask>

                        <!-- Search -->
                        <section>
                            <p class="content"><b>Selected:</b> {{ selected }}</p>
                            <b-field>
                                <b-autocomplete
                                    rounded
                                    v-model="searchQuery"
                                    :data="searchList"
                                    placeholder="Search for a task"
                                    icon="magnify"
                                    @select="option => selected = option">
                                    <template slot="empty">No results found</template>
                                </b-autocomplete>
                            </b-field>
                        </section>

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
  

    export default {
        components: {tiles, addTask},
        data() {
            return {
                list: [],
                searchList: [],
                
                data: this.searchList,
                searchQuery: '',
                selected: null
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

                        for (var i = 0; i < taskList.length; i++) {
                            this.searchList.push(taskList[i].title);
                        }

                        console.log(this.searchList);
                    })
                    .catch((error) => this.errors = error.response.data);
            },
            //  filteredDataArray() {
            //     return this.data.filter((option) => {
            //         return option
            //             .toString()
            //             .toLowerCase()
            //             .indexOf(this.searchQuery.toLowerCase()) >= 0
            //     })
            // }
        }
    }
</script>

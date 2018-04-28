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
                                    :data="titleList"
                                    placeholder="Search for a task"
                                    icon="magnify"
                                    @select="option => selected = option">
                                    <template slot="empty">No results found</template>
                                </b-autocomplete>
                            </b-field>
                        </section>

                    </div>
                    <div class="card-content">
                        <tiles :searchList="searchList"></tiles>
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
                titleList: [],
                
                data: this.titleList,
                searchQuery: '',
                selected: null
            }
        },
        mounted(){
            this.init()
        },
         watch: {
            // searchQuery(){
            //     if (this.searchQuery.length > 0) {
            //     this.searchList = this.lists.filter((item) => {
            //         return item.name.toLowerCase().indexOf(this.searchQuery.toLowerCase()) > -1;
            //     });
            //     } else {
            //     this.searchList = this.lists;
            //     }
            // }

            searchQuery: function () {
               if (this.searchQuery.length > 0) {
                    // this.searchList = this.list.filter((item) => {
                    //     return item.title.toLowerCase().indexOf(this.searchQuery.toLowerCase()) > -1;
                    // });

                    for (var key in this.list){
                        var item = this.list[key];
                        
                        if (item.title == this.searchQuery) {
                           
                        }
                    }
                }
                else {

                }
            }
        },

        methods: {
            init(){
                axios.get('getTasks')
                    .then((response)=>{
                        var taskList = response.data;
                        this.list = response.data;
                        this.searchList = response.data;

                        for (var i = 0; i < taskList.length; i++) {
                            this.titleList.push(taskList[i].title);
                        }
                    })
                    .catch((error) => this.errors = error.response.data);
            }
        }
    }
</script>

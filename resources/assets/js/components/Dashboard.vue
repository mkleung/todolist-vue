<template>
    <section class="hero is-primary is-bold">
    <div class="hero-body">
            <div class="container">
                <div class="column is-6 is-offset-3">
                    <h1 class="title has-text-centered margin-top-20">My Tasks</h1>
                    <div class=" has-text-centered">{{ new Date().getMonth() }}/{{ new Date().getDate() }}/{{ new Date().getFullYear() }} </div>
                </div>
                
                <div class="column is-6 is-offset-3">
                    <div class="card">

                        <!-- SEARCH -->
                        <div class="card-content">
                            <div class="has-text-centered">
                                <addTaskModal></addTaskModal>
                                <search></search>
                            </div>
                        </div>

                        <!-- LIST -->
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
    let addTaskModal = require('./AddTaskModal.vue');
    let search = require('./SearchTask.vue');

    export default {
        components: {tiles, addTaskModal, search},
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
        computed: {
            fillSearchOptions() {
                return this.titleList.filter((option) => {
                    return option
                        .toString()
                        .toLowerCase()
                        .indexOf(this.searchQuery.toLowerCase()) >= 0
                })
            }
        },
         watch: {
            searchQuery: function () {
               if (this.searchQuery.length > 0) {
                    this.searchList = this.list.filter((item) => {
                        return item.title.toLowerCase().indexOf(this.searchQuery.toLowerCase()) > -1;
                    });
                }
                else {
                     this.searchList = this.list;
                }
            },
        },

        methods: {
            init(){
                axios.get('getTasks')
                    .then((response)=>{
                        
                        var taskList = response.data;
                       console.log(taskList);
                        if (response.data == "invalid"){
                            this.$router.replace('/')
                        }
                        else {

                           
                            var taskList = response.data;
                            this.list = response.data;
                            this.searchList = response.data;

                             for (var i = 0; i < taskList.length; i++) {
                                 this.titleList.push(taskList[i].title);
                             }
                        }
                            
                    })
                    .catch((error) => this.errors = error.response.data);
            }
        }
    }
</script>

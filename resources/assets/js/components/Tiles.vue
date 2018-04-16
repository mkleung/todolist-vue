<template>
<div class="tile is-ancestor">
    <div class="tile is-vertical is-12">
          <div class="tile is-parent is-vertical"  v-for="(item, index) in list" :key='index'>
            <article class="tile is-child notification">
              <div class="title todoTitle__title">
                <span class="todoTitle__title--span">{{item.title}}</span>
                <span>
                    <a @click='editTask(index, item.id)'><i class="fa fa-pencil todoTitle__title--icon"></i></a>
                    <a @click='deleteTask(index, item.id)'><i  class="fa fa-trash todoTitle__title--icon"></i></a>
                </span>
              </div>
            </article>
          </div> 
    </div>
</div>
</template>

<script>
export default {
  props: ["list"],
  data() {
    return {

    }
  },

  methods: {
    deleteTask(key, id){
       if (confirm("Are you sure?")){
          axios.delete(`task/${id}`)
              .then((response)=> this.list.splice(key,1))
              .catch((error) => this.errors = error.response.data);
        }
    },
    editTask(id){
      console.log( id);
        // if (confirm("Are you sure?")){
        //   axios.delete(`task/${id}`)
        //       .then((response)=> this.list.splice(key,1))
        //       .catch((error) => this.errors = error.response.data);
        // }
    }
  }
}
</script>

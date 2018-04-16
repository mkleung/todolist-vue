<template>
<div class="tile is-ancestor">
    <div class="tile is-vertical is-12">
          <div class="tile is-parent is-vertical"  v-for="(item, index) in list" :key='index'>
            <article class="tile is-child notification">
              <div class="title todoTitle__title">
                <span class="todoTitle__title--span">{{item.title}}</span>
                <span>
                    <a @click='editTask(index, item.id)'><i class="fa fa-pencil todoTitle__icon"></i></a>
                    
                    <a @click="toggleDelete(item)">
                      <i class="fa fa-trash todoTitle__icon"></i>
                    </a>

                    <span v-if="deleting == item.id">
                        <a @click ="deleteTask(index, item.id)">
                          <i class="fa fa-check todoTitle__icon todoTitle__icon--green"></i>
                        </a>
                        <a @click="untoggleDelete()">
                          <i class="fa fa-times todoTitle__icon todoTitle__icon--red"></i>
                        </a>
                    </span>
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
      deleting: false,
    }
  },

  methods: {
    toggleDelete: function (item) {
        // this.deleting = !this.deleting;
        this.deleting = item.id;
    },
    untoggleDelete: function () {
        this.deleting = false;
    },
    deleteTask(key, id){
          axios.delete(`task/${id}`)
              .then((response)=> this.list.splice(key,1))
              .catch((error) => this.errors = error.response.data);
        
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

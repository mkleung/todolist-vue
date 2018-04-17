<template>
<div class="tile is-ancestor">
    <div class="tile is-vertical is-12">
          <div class="tile is-parent is-vertical"  v-for="(item, index) in list" :key='index'>
            <article class="tile is-child notification">
              <div class="title todoTitle__title">

                <span  v-if="editing != item.id"  class="todoTitle__title--span">{{item.title}}</span>
                
                <span v-if="editing == item.id" class="todoTitle__title--span field is-grouped">
                  <p class="control is-expanded">
                      <input type="text" placeholder="Update" class="input" v-model="item.title">
                  </p>
                  <p class="control">
                    <button class="button is-info" @click="updateTask(item)">Update</button>
                  </p>
                  <p class="control">
                    <button class="button is-text" @click="editing = false">Cancel</button>
                  </p>
                </span>

      

                <span>
                    <!-- Edit -->
                    <a @click='toggleEdit(item)'>
                      <i class="fa fa-pencil todoTitle__icon"></i>
                    </a>
                    
                    <!-- Delete -->
                    <a @click="toggleDelete(item)">
                      <i class="fa fa-trash todoTitle__icon"></i>
                    </a>

                    <span v-if="deleting == item.id">
                        <a @click ="deleteTask(index, item.id)">
                          <i class="fa fa-check todoTitle__icon todoTitle__icon--green"></i>
                        </a>
                        <a @click="deleting = false">
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
      editing: false
    }
  },

  methods: {
    toggleEdit: function (item) {
        if (!this.editing) {
           this.editing = item.id;
        }
       else {
          this.editing = false;
       }
    },
    updateTask(item){
      console.log("update task");
        axios.patch(`task/${item}`)
              .then((response)=>{})
              .catch((error) => this.errors = error.response.data);
    },
    deleteTask(key, id){
          axios.delete(`task/${id}`)
              .then((response)=> this.list.splice(key,1))
              .catch((error) => this.errors = error.response.data);
    },
  
  }
}
</script>

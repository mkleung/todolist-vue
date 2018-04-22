<template>
<div class="tile is-ancestor">
    <div class="tile is-vertical is-12">
          <div class="tile is-parent is-vertical"  v-for="(item, index) in list" :key='index'>
            <article class="tile is-child notification">
              <div class="title todoTitle__title">
                
                <!-- <span  v-if="editing != item.id"  class="todoTitle__title--span">
                  <span class="todoTitle__checkbox b-checkbox is-default">
                      <input @click="toggleTask(item)"  v-bind:id="index" class="styled" type="checkbox" v-model="item.status">
                      <label v-bind:for="index"></label>
                  </span>
                  <span v-bind:class="{ strikethrough: item.status }">{{item.title}}</span>
                </span> -->

               
              <div class="field">
                  <b-checkbox @change="toggleTask(item)" size="is-small" v-model="item.status"
                  true-value="1"
                  false-value="0">
                      <span v-bind:class="{ strikethrough: item.status }">{{item.title}}</span>
                  </b-checkbox>
              </div>

                
                <span v-if="editing == item.id" class="todoTitle__title--span field is-grouped">
                  <p class="control is-expanded">
                      <input type="text" placeholder="Update" class="input" v-model="item.title">
                  </p>
                </span>

      
                <span>
                    <!-- Edit -->
                    <a v-if="editing != item.id" @click='toggleEdit(item)'>
                      <i class="fa fa-pencil todoTitle__icon"></i>
                    </a>

                    <span v-if="editing == item.id">
                      <a @click="updateTask(item, index)">
                          <i class="fa fa-check todoTitle__icon todoTitle__icon--green"></i>
                      </a>
                      <a @click="editing = false">
                        <i class="fa fa-times todoTitle__icon todoTitle__icon--red"></i>
                      </a>
                    </span>

                    <!-- Delete -->
                    <a  v-if="deleting != item.id" @click="toggleDelete(item)">
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
    toggleTask: function(item) {
        console.log("toggle task");
        // axios.post('toggleTask', item)
        //   .then((response)=> {
            
        //   })
        //   .catch((error) => this.errors = error.response.data);
    },
    toggleEdit: function (item) {
        this.editing = item.id;
    },
    toggleDelete: function (item) {
         this.deleting = item.id;
    },
    updateTask(item, id){
      console.log("update task");
        
        axios.patch(`task/${id}`, item)
          .then((response)=> {
            this.editing = false;
          })
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

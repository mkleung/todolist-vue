<template>

<div class="tile is-ancestor">
    <div class="tile is-vertical is-12">
          <div class="tile is-parent is-vertical"  v-for="(item, index) in searchList" :key='index'>
            <article class="tile is-child notification">
              <div class="title todoTitle__title">
                
                <label
                  class="b-checkbox checkbox"
                  :class="[size, { 'is-disabled': disabled }]"
                  ref="label" @change="toggleTask(item)">
                      <input
                                v-model="item.status"
                                type="checkbox">
                            <span class="check"/>
                            <span class="control-label"><slot/></span>
                

                <span v-if="editing == item.id" class="todoTitle__title--span field is-grouped">
                  <p class="control is-expanded">
                      <input type="text" placeholder="Update" class="input" v-model="item.title">
                  </p>
                </span>
                <span v-else>
                    <span v-bind:class="{ strikethrough: item.status }"> {{item.title}}</span>
                </span>
              </label>
            
              <!-- Edit -->
              <span>
                     <!-- <b-tooltip label="Edit"
                        position="is-bottom">
                        <a v-if="editing != item.id" @click='toggleEdit(item)'>
                          <i class="fa fa-pencil todoTitle__icon"></i>
                        </a>
                    </b-tooltip>

                    <span v-if="editing == item.id">
                      <a @click="updateTask(item, index)">
                          <i class="fa fa-check todoTitle__icon todoTitle__icon--green"></i>
                      </a>
                      <a @click="editing = false">
                        <i class="fa fa-times todoTitle__icon todoTitle__icon--red"></i>
                      </a>
                    </span> -->

                    <!-- Delete -->
                    <!-- <b-tooltip label="Delete"
                        position="is-bottom">
                        <a  v-if="deleting != item.id" @click="toggleDelete(item)">
                          <i class="fa fa-trash todoTitle__icon"></i>
                        </a>
                    </b-tooltip>

                    <span v-if="deleting == item.id">
                        <a @click ="deleteTask(index, item)">
                          <i class="fa fa-check todoTitle__icon todoTitle__icon--green"></i>
                        </a>
                        <a @click="deleting = false">
                          <i class="fa fa-times todoTitle__icon todoTitle__icon--red"></i>
                        </a>
                    </span> -->

                </span>

              </div>
            </article>
          </div> 
    </div>
</div>
</template>

<script>
export default {
  props: ["searchList"],
  data() {
    return {
    }
  },

  methods: {
    // toggleTask: function(item) {
    //     console.log("toggle task");
    //     axios.post('toggleTask', item)
    //       .then((response)=> {
           
    //       })
    //       .catch((error) => this.errors = error.response.data);
    // },
    // toggleEdit: function (item) {
    //     this.editing = item.id;
    // },
    // toggleDelete: function (item) {
    //      this.deleting = item.id;
    // },
    // updateTask(item, id){
    //     axios.patch(`task/${id}`, item)
    //       .then((response)=> {
    //           this.editing = false;

    //       })
    //       .catch((error) => this.errors = error.response.data);
    // },
    // deleteTask(key, item){
    //       axios.delete(`task/${item.id}`)
    //           .then((response)=> {
    //               this.$parent.searchList = this.$parent.searchList.filter(function(e) { return e !== item })
    //               this.$parent.titleList = this.$parent.titleList.filter(function(e) { return e !== item.title })
    //               this.$parent.list = this.$parent.list.filter(function(e) { return e !== item })
    //           })
    //           .catch((error) => this.errors = error.response.data);
    // },
  }
}
</script>

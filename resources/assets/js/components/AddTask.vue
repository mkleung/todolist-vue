<template>
    <div class="field has-addons">
        <div class="control addTask__input">
            <input class="input" type="text" placeholder="Add a task" v-model="task.title">
        </div>
        <div class="control">
            <button class="button is-info" @click='addTask'>Save</button>
        </div>
    </div>
</template>

<script>
  export default {
    data(){
        return{
          task: {
            title: ''
          },
        }
    },
    methods: {
      addTask() {
          if (this.$data.task.title !== "") {
            axios.post('task', this.$data.task)
            .then((response)=>{
                this.$parent.list.unshift(response.data)
                this.$data.task.title = "";
            })
            .catch((error) => this.errors = error.response.data);
          }


      }
    }
  }
</script>
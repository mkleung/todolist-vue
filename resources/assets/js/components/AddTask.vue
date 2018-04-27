<template>
    <div class="field is-grouped">
        <p class="control is-expanded">
           <input class="input" type="text" placeholder="Add a task" v-model="task.title">
        </p>
        <p class="control">
            <button class="button is-info" @click='addTask'>
                SAVE
            </button>
        </p>
    </div>
</template>

<script>
  export default {
    data(){
        return{
          task: {
            title: '',
            
          },
          time: new Date()
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
<template>


    <div class="field">
        <label class="label">Add a Task</label>
        <div class="control">
            <input class="input" type="text" placeholder="Text input" v-model="task.title">
        </div>

        <div class="field is-grouped">
            <div class="control">
                <button class="button is-link" @click='addTask'>Submit</button>
            </div>
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
          axios.post('task', this.$data.task)
          .then((response)=>{
             
                 this.$parent.list.push(response.data)
          })
          .catch((error) => this.errors = error.response.data);
      }
    }
  }
</script>
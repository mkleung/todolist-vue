<template>
    <div class="field is-grouped">
        <p class="control is-expanded">
           <input class="input" type="text" placeholder="Add a task" v-model="task.title">
        </p>
         <b-field>
        <b-timepicker v-model="time"
            placeholder="Select a time">

            <button class="button is-primary"
                @click="time = new Date()">
                <b-icon icon="clock"></b-icon>
                <span>Now</span>
            </button>

            <button class="button is-danger"
                @click="time = null">
                <b-icon icon="close"></b-icon>
                <span>Clear</span>
            </button>
        </b-timepicker>
    </b-field>

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
            time: new Date()
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
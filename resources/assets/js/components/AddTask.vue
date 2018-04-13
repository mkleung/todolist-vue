<template>


    <div class="field">
        <label class="label">Add a Task</label>
        <div class="control">
            <input class="input" type="text" placeholder="Text input">
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

   
    methods: {
      addTask() {
          console.log("add task");
        //   axios.post('task')
        //   .then((response)=>{
        //    console.log("task added");
        //   })
        //   .catch((error) => this.errors = error.response.data);
      }
    }
  }
</script>
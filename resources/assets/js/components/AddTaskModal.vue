<template>
    <section>
        <button class="button is-primary is-rounded "
            @click="isComponentModalActive = true">
            <span class="icon">
                    <i class="fa fa-location-arrow"></i>
                </span>
            <span>Add a task</span>
        </button>

        <b-modal :active.sync="isComponentModalActive" has-modal-card>
           
                <div class="modal-card" style="width: 600px">
                    <header class="modal-card-head">
                        <p class="modal-card-title">Add Task</p>
                    </header>
                    <section class="modal-card-body">
                       <div class="field">
                            <p class="control has-icons-left has-icons-right">
                            
                                    <b-input maxlength="100" type="textarea" v-model="task.title"></b-input>
                               

                            </p>
                            </div>

                        
                    </section>
                    <footer class="modal-card-foot">
                        <button class="button" type="button" @click="isComponentModalActive = false">Close</button>
                        <button class="button is-primary">Add</button>
                    </footer>
                </div>
           

        </b-modal>
    </section>
</template>

<script>

    export default {
        data() {
            return {
                isComponentModalActive: false,
                 task: {
                    title: ''
                },
            }
        },
        
        methods: {
            // login() {
            //     axios.post('login', {email:this.user.email, password:this.user.password})
            //         .then((response)=>{
            //             this.isComponentModalActive = false;

            //             this.$parent.userLogin = true;
            //         })
            //         .catch((error) => this.errors = error.response.data);


            // },
            
        }
    }
</script>
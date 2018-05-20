<template>
    <section>
        <button class="button is-info"
            @click="isComponentModalActive = true">
            <span class="icon">
                    <i class="fa fa-location-arrow"></i>
                </span>
            <span>Login</span>
        </button>

        <b-modal :active.sync="isComponentModalActive" has-modal-card>
           
                <div class="modal-card" style="width: auto">
                    <header class="modal-card-head">
                        <p class="modal-card-title">Login</p>
                    </header>
                    <section class="modal-card-body">
                       
                       <form id="app" @submit="checkForm" action="https://vuejs.org/" method="post">
  
                            <p v-if="errors.length">
                                <b>Please correct the following error(s):</b>
                                <ul>
                                <li v-for="(error, index) in errors" :key='index'>{{ error }}</li>
                                </ul>
                            </p>
                            
                            <p>
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" v-model="name">
                            </p>

                            <p>
                                <label for="age">Age</label>
                                <input type="number" name="age" id="age" v-model="age" min="0">
                            </p>

                            <p>
                                <label for="movie">Favorite Movie</label>
                                <select name="movie" id="movie" v-model="movie">
                                <option>Star Wars</option>
                                <option>Vanilla Sky</option>
                                <option>Atomic Blonde</option>
                                </select>
                            </p>

                            <p>
                                <input type="submit" value="Submit">  
                            </p>

                            </form>
                    </section>
                    <footer class="modal-card-foot">
                        <button class="button" type="button" @click="isComponentModalActive = false">Close</button>
                        <!-- <button class="button is-primary" @click="login">Login</button> -->
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
                 user: {
                    email: '',
                    password: ''
                },
                errors:[],
                name:null,
                age:null,
                movie:null
            }
        },
        
        methods: {
             checkForm:function(e) {
                if(this.name && this.age) return true;
                this.errors = [];
                if(!this.name) this.errors.push("Name required.");
                if(!this.age) this.errors.push("Age required.");
                e.preventDefault();
                }
            },
            // login() {
            //     axios.post('login', {email:this.user.email, password:this.user.password})
            //         .then((response)=>{

                        
            //             this.$parent.userLogin = true;
            //             this.$router.replace('/dashboard')
            //         })
            //         .catch((error) => this.errors = error.response.data);
                
            //     this.isComponentModalActive = false;
            
            // },
        
    }
</script>
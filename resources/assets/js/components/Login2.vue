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
                       
                       <form id="app" @submit="checkForm" action="login" method="post">
  
                            <p v-if="errors.length">
                                <b>Please correct the following error(s):</b>
                                <ul>
                                <li v-for="(error, index) in errors" :key='index'>{{ error }}</li>
                                </ul>
                            </p>
                            
                            <p>
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" v-model="user.email">
                            </p>

                            <p>
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" v-model="user.password">
                            </p>

                             <input type="hidden" name="_token" :value="csrf">
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
                movie:null,
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        },
        
        methods: {
            
             checkForm:function(e) {
                if(this.user.email && this.user.password) return true;
                this.errors = [];
                if(!this.user.email) this.errors.push("Email required.");
                if(!this.user.password) this.errors.push("Password required.");

                this.$parent.userLogin = true;
                this.isComponentModalActive = false;

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
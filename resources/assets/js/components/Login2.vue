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
                this.errors = [];
               
                if(!this.user.email) {
                    this.errors.push("Email required.");
                } else if(!this.validEmail(this.user.email)) {
                    this.errors.push("Valid email required.");        
                }
                if(!this.errors.length) return true;

                if(!this.user.password) this.errors.push("Password required.");

                e.preventDefault();
            },
            validEmail:function(email) {
                var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return re.test(email);
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
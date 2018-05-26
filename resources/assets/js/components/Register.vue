<template>
     <section>
       
         <button class="button "  :class="[  welcome ? 'is-success is-outlined' : 'is-info'  ]"
            @click="isComponentModalActive = true">
            <span class="icon">
                    <i class="fa"  :class="[  welcome ? 'fa-heart' : 'fa-thumbs-up'  ]"></i>
                </span>
            <span>Register</span>
        </button>
    


        <b-modal :active.sync="isComponentModalActive" has-modal-card>
           
                <div class="modal-card" style="min-width: 480px;">
                    <header class="modal-card-head">
                        <p class="modal-card-title">Register</p>
                    </header>
                    <section class="modal-card-body">
                        
                        <div class="field">
                            <p class="control has-icons-left has-icons-right">
                                <input class="input" type="text" placeholder="Enter Name" v-model="user.name">
                                <span class="icon is-small is-left">
                                <i class="fas fa-envelope"></i>
                                </span>
                                <span class="icon is-small is-right">
                                <i class="fas fa-check"></i>
                                </span>
                            </p>
                        </div>

                       <div class="field no-margin-left">
                            <p class="control has-icons-left has-icons-right">
                                <input class="input" type="email" placeholder="Enter Email" v-model="user.email">
                                <span class="icon is-small is-left">
                                <i class="fas fa-envelope"></i>
                                </span>
                                <span class="icon is-small is-right">
                                <i class="fas fa-check"></i>
                                </span>
                            </p>
                        </div>

                          <div class="field no-margin-left">
                            <p class="control has-icons-left has-icons-right">
                                <input class="input" type="password" placeholder="Enter Password" v-model="user.password">
                                <span class="icon is-small is-left">
                                <i class="fas fa-envelope"></i>
                                </span>
                                <span class="icon is-small is-right">
                                <i class="fas fa-check"></i>
                                </span>
                            </p>
                        </div>

                         <div class="field no-margin-left">
                            <span class="message is-danger"  v-if="error.length">{{error}}</span>
                             <span  v-else>&nbsp;</span>
                        </div>

                    </section>
                    <footer class="modal-card-foot">
                        <button class="button" type="button" @click="isComponentModalActive = false">Close</button>
                        <button class="button is-primary" @click="register">Register</button>
                    </footer>
                </div>
           

        </b-modal>
    </section>
</template>

<script>
    export default {
        props: ["welcome"],
        data() {
            return {
                isComponentModalActive: false,
                error:"",
                user: {
                    name:'',
                    email: '',
                    password: ''
                },
            }
        },
        methods: {
            register() {
                if (this.user.password == "") {
                    this.error = "Invalid Password";
                }
                if (this.user.email == "") {
                    this.error = "Invalid Email";
                }
                if (this.user.name == "") {
                    this.error = "Invalid Name";
                }
                
                

                
                axios.post('register', {name: this.user.name, email:this.user.email, password:this.user.password})
                    .then((response)=>{
                        this.isComponentModalActive = false;
                        this.$parent.userLogin = true;
                        this.$router.push('dashboard');
                    })
                    .catch((error) => {
                        this.error = (error.response.data.email).replace(/[^a-zA-Z ]/g, "");
                    });

            },
            
        }
    }
</script>
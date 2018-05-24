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
           
                <div class="modal-card" style="min-width: 480px;">
                    <header class="modal-card-head">
                        <p class="modal-card-title">Login</p>
                    </header>
                    <section class="modal-card-body">
                       <div class="field">
                           <label class="label">Email</label>
                            <p class="control has-icons-left has-icons-right">
                                 
                                <input class="input" type="email" placeholder="Email" v-model="user.email">
                                <span class="icon is-small is-left">
                                <i class="fas fa-envelope"></i>
                                </span>
                                <span class="icon is-small is-right">
                                <i class="fas fa-check"></i>
                                </span>
                            </p>
                            </div>

                        <div class="field no-margin-left">
                            <label class="label">Password</label>
                            <b-input
                                type="password"
                                
                                v-model = "user.password"
                                password-reveal
                                placeholder="Your password"
                                required
                                @keydown.native.enter="login()"
                                >
                            </b-input>

                            
                        </div>
                        <p v-if="errors.length">
                                <b-notification type="is-danger" v-for="(error, index) in errors" :key='index'>
                                    {{error}}
                                </b-notification>
                            </p>

                    </section>
                    <footer class="modal-card-foot">
                        <button class="button" type="button" @click="isComponentModalActive = false">Close</button>
                        <button class="button is-primary" @click="login">Login</button>
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
                errors:[],
                user: {
                    email: '',
                    password: ''
                },
            }
        },
        
        methods: {
            login() {
            this.errors = [];

                axios.post('login', {email:this.user.email, password:this.user.password})
                    .then((response)=>{
                            this.isComponentModalActive = false;
                            this.$parent.userLogin = true;
                            this.$router.push('dashboard');

                            
                    })
                    // .catch((error) => this.errors = error.response.data);
                    .catch((error) => {
                       
                        this.errors.push(error.response.data);
                    });
                
                
            
            },
        }
    }
</script>
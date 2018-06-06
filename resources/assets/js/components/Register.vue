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
                        <ul class="message is-danger">
                            <li v-for="error in errors" :key="error.id">
                                {{error}}
                            </li>
                        </ul>
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
                errors:[],
                user: {
                    name:'',
                    email: '',
                    password: ''
                },
            }
        },
        methods: {
            register() {
                this.errors = [];
                axios.post('register', {name: this.user.name, email:this.user.email, password:this.user.password})
                    .then((response)=>{
                        this.isComponentModalActive = false;
                        this.$parent.userLogin = true;
                        window.location = "/dashboard";
                       
                    })
                    .catch((error) => {
                        var errorData = error.response.data;
                        for (var key in errorData) {
                            var errorDescription = errorData[key];
                            this.errors.push(errorDescription[0]);
                        }
                    });
            },
        }
    }
</script>
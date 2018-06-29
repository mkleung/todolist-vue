<template>
    <section class="hero is-primary is-bold">
        <div class="hero-body">
            <div class="container">
                <div class="column is-6 is-offset-3">
                        <h1 class="title has-text-centered margin-top-20">My Profile</h1>
                        <div class=" has-text-centered">{{ new Date().getMonth() }}/{{ new Date().getDate() }}/{{ new Date().getFullYear() }} </div>
                </div>

                <div class="column is-6 is-offset-3">
                        <div class="card">
                            <div class="card-content">

                                <div class="field">
                                    <label class="label">Name</label>
                                    <div class="control">
                                        <input class="input" type="text" placeholder="Name" v-model="user.name">
                                    </div>
                                </div>

                                <div class="field">
                                    <label class="label">Email</label>
                                    <div class="control">
                                        <input class="input" type="email" placeholder="Email" v-model="user.email" disabled>
                                    </div>
                                </div>

                                <div class="field">
                                    <label class="label">Existing Password</label>
                                    <div class="control">
                                        <input class="input" type="password" v-model="user.oldpassword" placeholder="Password">
                                    </div>
                                </div>

                                <div class="field">
                                    <label class="label">New Password</label>
                                    <div class="control">
                                        <input class="input" type="password" v-model="user.newpassword" placeholder="Password">
                                    </div>
                                </div>
                                
                                <button class="button is-primary" @click="update">Update</button>
                    
                            </div>

                        </div>
                    
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        data() {
            return {
                user: {
                    name:'',
                    email: '',
                    oldpassword : '',
                    newpassword: '',
                },
            }
        },
         mounted(){
            this.init()
        },
         methods: {
            init(){
                axios.get('getprofile')
                    .then((response)=>{
                        this.user.name = response.data.name;
                        this.user.email = response.data.email          
                    })
                    .catch((error) => this.errors = error.response.data);
            },
            update() {
                 axios.post('editprofile', this.$data.user)
                    .then((response)=>{
                       console.log(response);
                    })
                    .catch((error) => this.errors = error.response.data);
            }
         }
    }
    
</script>

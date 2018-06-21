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
                                        <input class="input" type="text" placeholder="Name">
                                    </div>
                                </div>

                                <div class="field">
                                    <label class="label">Email</label>
                                    <div class="control">
                                        <input class="input" type="text" placeholder="Email">
                                    </div>
                                </div>

                                <div class="field">
                                    <label class="label">Existing Password</label>
                                    <div class="control">
                                        <input class="input" type="password" placeholder="Password">
                                    </div>
                                </div>

                                <div class="field">
                                    <label class="label">New Password</label>
                                    <div class="control">
                                        <input class="input" type="password" placeholder="Password">
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

            }
        },
         mounted(){
            this.init()
        },
         methods: {
            
            init(){

                axios.get('getprofile')
                    .then((response)=>{
                     console.log(response);
                            
                    })
                    .catch((error) => this.errors = error.response.data);
            }
         }
    }
    
</script>

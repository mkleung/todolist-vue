<template>
    <section class="hero is-primary is-bold">
        <div class="hero-body">
            <div class="container">
                <div class="column is-6 is-offset-3">
                        <h1 class="title has-text-centered">Settings</h1>
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
                                    <label class="label">Password</label>
                                    <div class="control has-icons-left has-icons-right">
                                        <input class="input is-danger" type="password" placeholder="Password" value="">
                                        <span class="icon is-small is-left">
                                        <i class="fas fa-envelope"></i>
                                        </span>
                                        <span class="icon is-small is-right">
                                        <i class="fas fa-exclamation-triangle"></i>
                                        </span>
                                    </div>
                                    <p class="help is-danger">This password is invalid</p>
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
         methods: {
            update() {
            }
         }
    }
    
</script>

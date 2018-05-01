<template>
    <section>
        <button class="button is-info"
            @click="isComponentModalActive = true">
            <span class="icon">
                     <i class="fa fa-thumbs-up"></i>
                </span>
            <span>Register</span>
        </button>

        <b-modal :active.sync="isComponentModalActive" has-modal-card>
            <modal-form v-bind="formProps"></modal-form>
        </b-modal>
    </section>
</template>

<script>
    const ModalForm = {
        props: ['email', 'password'],
        template: `
            <form action="">
                <div class="modal-card" style="width: auto">
                    <header class="modal-card-head">
                        <p class="modal-card-title">Register</p>
                    </header>
                    <section class="modal-card-body">
                        <div class="field">
                            <label class="label">Name</label>
                            <b-input
                                label=""
                                type="text"
                                :value="name"
                                placeholder="Your Name"
                                required>
                            </b-input>
                        </div>
                        <div class="field no-margin-left">
                            <label class="label">Email</label>
                            <b-input
                                type="email"
                                :value="email"
                                placeholder="Your email"
                                required>
                            </b-input>
                        </div>
                        <div class="field no-margin-left">
                            <label class="label">Password</label>
                            <b-input
                                type="password"
                                :value="password"
                                placeholder="Your Password"
                                required>
                            </b-input>
                         </div>
                        
                       
                    </section>
                    <footer class="modal-card-foot">
                        <button class="button" type="button" @click="$parent.close()">Close</button>
                        <button class="button is-primary">Register</button>
                    </footer>
                </div>
            </form>
        `
    }

    export default {
        components: {
            ModalForm
        },
        data() {
            return {
                isComponentModalActive: false,
                formProps: {
                    name: '',
                    email: '',
                    password: ''
                }
            }
        }
    }
</script>
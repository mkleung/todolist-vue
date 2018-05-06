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
            <form action="">
                <div class="modal-card" style="width: auto">
                    <header class="modal-card-head">
                        <p class="modal-card-title">Login</p>
                    </header>
                    <section class="modal-card-body">
                       <div class="field">
                            <p class="control has-icons-left has-icons-right">
                                <input class="input" type="email" placeholder="Email">
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
                                :value="password"
                                password-reveal
                                placeholder="Your password"
                                required>
                            </b-input>
                        </div>

                        <b-checkbox>Remember me</b-checkbox>
                    </section>
                    <footer class="modal-card-foot">
                        <button class="button" type="button" @click="$parent.close()">Close</button>
                        <button class="button is-primary">Login</button>
                    </footer>
                </div>
            </form>

        </b-modal>
    </section>
</template>

<script>
    export default {
        data() {
            return {
                isComponentModalActive: false,
            }
        }
    }
</script>
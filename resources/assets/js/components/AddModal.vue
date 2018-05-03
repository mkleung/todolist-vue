<template>
    <section>
        <button class="button is-info"
            @click="isComponentModalActive = true">
            <span class="icon">
                    <i class="fa fa-clock-o"></i>
                </span>
            <span>Add a Task</span>
        </button>

        <b-modal :active.sync="isComponentModalActive"  :width="640" scroll="keep">
            <modal-form v-bind="formProps"></modal-form>
        </b-modal>

        <script type="text/x-template" id="modal-template">
         <form action="">
                <div class="modal-card" style="width: auto">
                    <header class="modal-card-head">
                        <p class="modal-card-title">Add a Task</p>
                    </header>
                    <section class="modal-card-body">
                        <div class="field">
                            <p class="control has-icons-left has-icons-right">
                                <input class="input" type="text" placeholder="">
                                <span class="icon is-small is-left">
                                <i class="fas fa-envelope"></i>
                                </span>
                                <span class="icon is-small is-right">
                                <i class="fas fa-check"></i>
                                </span>
                            </p>
                        </div>

                        
                             <b-field label="Select time">
                                <b-timepicker
                                    rounded
                                    placeholder="Click to select..."
                                    icon="clock"
                                    :hour-format="format">
                                </b-timepicker>
                            </b-field>

                            <b-field>
                                <b-switch v-model="formatAmPm">AM/PM</b-switch>
                            </b-field>
                  
                               
                       
                    </section>
                    <footer class="modal-card-foot">
                        <button class="button" type="button" @click="$parent.close()">Close</button>
                        <button class="button is-primary">Save</button>
                    </footer>
                </div>
            </form>
            </script>
    </section>
</template>

<script>
    const ModalForm = {
        props: ['email', 'password'],
        template: '#modal-template'
    }

    export default {
        components: {
            ModalForm
            
        },
        data() {
            return {
                showModal: false,
                isComponentModalActive: false,
                formProps: {
                    email: '',
                    password: ''
                },
                 formatAmPm: false
            }
        }
    }
</script>
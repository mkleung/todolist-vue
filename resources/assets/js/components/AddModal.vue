<template>
    <section>
        <button class="button is-medium is-info" @click="prompt">
            Add Task
        </button>

    </section>
</template>

<script>
    export default {
        methods: {
            prompt() {
                this.$dialog.prompt({
                    message: `What's your name?`,
                    inputAttrs: {
                        placeholder: 'e.g. Walter',
                        maxlength: 10
                    },
                    onConfirm: (value) => this.$toast.open(`Your name is: ${value}`)
                })
            }
        }
    }
</script>
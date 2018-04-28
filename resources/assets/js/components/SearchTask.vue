<template>
    <section>
        <p class="content"><b>Selected:</b> {{ selected }}</p>
        <b-field>
            <b-autocomplete
                rounded
                v-model="searchQuery"
                :data="filteredDataArray"
                placeholder="Search for a task"
                icon="magnify"
                @select="option => selected = option">
                <template slot="empty">No results found</template>
            </b-autocomplete>
        </b-field>
    </section>
</template>

<script>

    export default {
        props: ["searchList"],
        data() {
            return {
                data: this.searchList,
                nsearchQueryame: '',
                selected: null
            }
        },
        computed: {
            filteredDataArray() {
                return this.data.filter((option) => {
                    return option
                        .toString()
                        .toLowerCase()
                        .indexOf(this.searchQuery.toLowerCase()) >= 0
                })
            }
        }
    }
</script>
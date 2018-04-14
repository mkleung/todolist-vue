<template>
<div class="tile is-ancestor">
    <div class="tile is-vertical is-12">
          <div class="tile is-parent is-vertical"  v-for="(item, index) in list" :key='index'>
            <article class="tile is-child notification">
              <div class="title todoTitle__title">
                <span class="todoTitle__title--span">{{item.title}}</span>
                <span><a href=""><i class="fa fa-trash"></i></a></span>
              </div>
            </article>
          </div> 
    </div>
</div>
</template>

<script>
export default {
  props: ["list"],
  data() {
    return {

    }
  },
  mounted(){
      this.init()
    },
  methods: {
       init(){
           
      }
  }
}
</script>

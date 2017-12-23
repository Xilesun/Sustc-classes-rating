<template>
  <div id="app">Hello world!</div>
</template>

<script>
  export default{
    data() {
      return {
        classes: []
      }
    },
    methods: {
      getClasses () {
        console.log('test')
        this.$http.get('/classes').then(response => {
          this.classes = response.body
        }, response => {
          console.log(response.status)
        })
      }
    },
    mounted () {
      this.getClasses()
    }
  }
</script>
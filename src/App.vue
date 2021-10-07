<template>
  <Navbar/>
  <router-view/>
  <Footer/>
</template>

<script>

import Navbar from '@/components/navbar/Navbar.vue'
import Footer from '@/components/footer/Footer.vue'

export default {
  name: 'App',
  components: {
    Navbar,
    Footer
  }
}

</script>

<style lang="scss">

* {
    box-sizing: border-box;
    padding: 0;
    margin: 0;
}

#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #2c3e50;
  min-height: 100vh;
  font-family: 'Montserrat', sans-serif;
}
</style>

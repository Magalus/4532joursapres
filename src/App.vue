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
  color: #2c3e50;
  min-height: 100vh;
  font-family: 'Montserrat', sans-serif;
  line-height: 1.85em;
}
</style>

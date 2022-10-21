<script setup>
// import HelloWorld from './components/HelloWorld.vue'
// import TheWelcome from './components/TheWelcome.vue'
import Navbar from "./components/Navbar.vue"
</script>

<template>
  <div>
    <div class="md:flex py-1 px-5 justify-end bg-abu gap-5 items-center text-black text-sm  hidden">
      <p>Tentang GOTani</p>
      <p>Promo Gotani</p>
    </div>
    <Navbar />
    
    <router-view></router-view>
  </div>
</template>


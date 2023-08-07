<template>
  <HeaderComponent/>
  <NavComponent/>
  <!-- <component :is="currentView"/> -->
  <!-- <AboutPage/> -->
  <!-- <ContactPage/> -->
  <router-view/>
</template>

<script>
import HeaderComponent from './components/HeaderComponent.vue';
import NavComponent from './components/NavComponent.vue';
// import {ref,computed} from 'vue'

// Pages Import 
// import AboutPage from './components/pages/AboutPage.vue';
// import ContactPage from './components/pages/Contact.vue';
// import GalleryPage from './components/pages/Gallery.vue';

// const routes = {
//   '/about' : AboutPage,
//   '/gallery' : GalleryPage,
//   '/contact' : ContactPage
// };

// const currentPath = ref(window.location.hash);
// window.addEventListener('hashchange',function(){
//   currentPath.value = window.location.hash;
// })

// const currentView = computed(function(){
//   return routes[currentPath.value.slice(1) || '/']
// })

export default {
  name: 'App',
  components: {
    HeaderComponent,
    NavComponent,
    // AboutPage,
    // ContactPage,
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}
</style>

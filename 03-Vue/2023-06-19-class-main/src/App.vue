<template>
  <img alt="Vue logo" src="./assets/logo.png">
  <!-- <HelloWorld msg="Welcome to Your Vue.js App"/> -->
  <ListItems @badValue="showMessage"/>
  <ToastMessage v-if="showToast"/>
</template>

<script>
import ListItems from './components/ListItems.vue'
import ToastMessage from './components/ToastMessage.vue'
import { ref } from 'vue'
// import HelloWorld from './components/HelloWorld.vue'

export default {
  name: 'App',
  components: {
    ListItems,
    ToastMessage
    // HelloWorld
  },
  setup() {
    const showToast = ref(false);

    const showMessage = function() {
      showToast.value = true;
      setTimeout(() => {
        showToast.value = false, 10000
      });
    }

    return { showToast, showMessage }
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
  margin-top: 60px;
}
</style>

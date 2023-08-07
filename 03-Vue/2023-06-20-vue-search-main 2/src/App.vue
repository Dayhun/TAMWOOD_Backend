<template>
  <nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
      <form class="d-flex" role="search">
        <input v-model="userInput" @keyup="getResults($event)" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </nav>
  <ul>
    <li v-for="dessert in result" :key="dessert.id">
      {{ dessert.dessert }}
    </li>
  </ul>
  <ul v-if="result.length==0">
    <li v-for="dessert in desserts" :key="dessert.id">
      {{ dessert.dessert }}
    </li>
  </ul>
</template>

<script>
import { ref } from 'vue';
export default {
  name: 'App',
  data(){
    return {
      result_2: [],
      // userInput: '',
      desserts_2: [
        {id:1, dessert: 'Cheesecake'},
        {id:2, dessert: 'Ice Cream'},
        {id:3, dessert: 'Apple Pie'},
        {id:4, dessert: 'Pudim'},
        {id:5, dessert: 'Brownie'},
        {id:6, dessert: 'Korean Hot Dog'},
        {id:7, dessert: 'Macaron'},
        {id:8, dessert: 'Brigadeiro'},
        {id:9, dessert: 'Donut'},
        {id:10, dessert: 'Lemon Pie'},
        {id:11, dessert: 'Meringue'},
        {id:12, dessert: 'Chocolate Cake'}
      ]
    }
  },
  method: {
    // getResults(e) {
    //   console.log("howdy");
    //   console.log(e.target.value);
    //   return this.desserts.value = this.desserts.value.filter( this.desserts.value.dessert.includes(e.target.value));
    // }
  },
  setup(){
    let userInput = ref('');
    let result = ref([]);
    const desserts = ref([
      {id:1, dessert: 'Cheesecake'},
      {id:2, dessert: 'Ice Cream'},
      {id:3, dessert: 'Apple Pie'},
      {id:4, dessert: 'Pudim'},
      {id:5, dessert: 'Brownie'},
      {id:6, dessert: 'Korean Hot Dog'},
      {id:7, dessert: 'Macaron'},
      {id:8, dessert: 'Brigadeiro'},
      {id:9, dessert: 'Donut'},
      {id:10, dessert: 'Lemon Pie'},
      {id:11, dessert: 'Meringue'},
      {id:12, dessert: 'Chocolate Cake'}
    ]);
    const getResults = () => {
      result.value = desserts.value.filter( item => item.dessert.toLowerCase().includes(userInput.value.toLowerCase()));
    }
    return { desserts, result, getResults, userInput }
  }
}
</script>

<style>
@import url("https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css");
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>

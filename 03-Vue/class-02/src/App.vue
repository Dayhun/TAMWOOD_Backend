<template>
    <div>
        <!-- <ContactForm />
    <CustomTable /> -->
      <ul>
        <li v-for="product in products" :key="product.id">
          {{ product.id }} - {{ product.name}} 
        </li>
      </ul>
    </div>
</template>

<script>
// import components in the script tag
// import CustomTable from './components/CustomTable.vue';
// import ContactForm from './components/ContactForm.vue';
export default {
    name: "App",
    // components: {
    //     CustomTable,
    //     ContactForm,
    // },
    data() {
        return {
            api: "/api/products",
            api_2: "http://jasonplaceholder.typicode.com/posts",
            products: [],
            posts: []
        }
    },
    methods: {
        async readApi() {
            try {
                let response = await fetch(this.api,{mode: 'no-cors'});
                this.products = await response.json();
            } catch (error) {
                console.log(error);
            }
        },
        async readApi_2() {
            try {
                let response = await fetch(this.api_2);
                this.posts = await response.json();
            } catch (error) {
                console.log(error);
            }
        },
    },
    created() {
      this.readApi();
      // this.readApi_2();
    }
};
</script>

<style>
/* not recommended. make src> assets> css folder */
#app {
    font-family: Avenir, Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-align: center;
    color: #2c3e50;
    margin-top: 60px;
}
</style>

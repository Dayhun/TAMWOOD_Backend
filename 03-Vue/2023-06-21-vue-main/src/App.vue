<template>
  <section class="app-nav-search">
    <NavBar/>
    <SearchBar @returnBookList="this.searchBookList" :bookList="this.bookList"/>
  </section>
  <BooksTable :books="this.bookList" v-if="!this.checkSearchResults()"/>
  <BooksTable :books="this.localResult" v-else/>

  <div v-show="false" class="alert alert-success" role="alert">
    Book included successfully!
  </div>
  <div v-show="false" class="alert alert-warning" role="alert">
    Book not found!
  </div>
</template>

<script>
import BooksTable from './components/BooksTable.vue';
import NavBar from './components/NavBar.vue';
import SearchBar from './components/SearchBar.vue';
export default {
  name: 'App',
  components: {
    NavBar,
    SearchBar,
    BooksTable
  },
  data() {
    return {
      bookList: [],
      bookApi: "http://localhost:80/api-vue/api/rest/V1/book-api.php",
      localResult: [],
    }
  },
  methods: {
    async getBooks(){
      let result = await fetch(this.bookApi);
      this.bookList = await result.json();
    },
    
    searchBookList(e) {
      this.localResult = e;
    },

    checkSearchResults() {
      if (this.localResult.length > 0) {
        return true;
      } else {
        return false;
      }

      // return (this.localResult.length > 0);
    }
  },
  created() {
    this.getBooks();
  }

}
</script>

<style>
@import url("https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css");

.app-nav-search {
  display: flex;
  justify-content: space-between;
  background-color: #f8f9fa;
}

#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>

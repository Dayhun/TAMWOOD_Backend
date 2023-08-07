<template>
    <div class="search-bar">
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" @keyup="searchBookList($event)" v-model="userInput">
                <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </div>
</template>

<script>
export default {
    name: 'SearchBar',
    props: {
        bookList: []
    },
    data() {
        return {
            userInput: '',
            searchResult: [],
        }
    },
    methods:{
        searchBookList(){
            this.searchResult = this.bookList.filter(
                (book) => book.title.toLowerCase().includes(this.userInput.toLowerCase())
            );

            this.$emit("returnBookList", this.searchResult);
        }
    }
}
</script>

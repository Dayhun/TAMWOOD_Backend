const app = Vue.createApp({
    data() {
        return {
            books: [],
        };
    },
    methods: {
        includeBook(titileVal,isbnVal,priceVal) {
            let book = {title: titileVal, isbn: isbnVal, price: priceVal};
            this.books.push(book);
        },
    },
});
app.mount("#app");

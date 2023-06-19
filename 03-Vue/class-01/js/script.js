const app = Vue.createApp({
    // template: "<h1>All of you are great!</h1>"
    // template: `
    // <div>
    //     <h1>All of you are great!</h1>
    // </div>
    // <section>
    //     <h2>Of course you all are great!</h2>
    // </section>
    // `,
    data() {
        return {
            title: "Manager",
            name: "Guilherme",
            gender: "Male",
            email: "mail@mail.com",
            salary: 72000,
            displayScreen: true,
        };
    },
    methods: {
        changeTitle(message) {
            this.title = message;
        },
        displayData(){
            this.displayScreen = !this.displayScreen;
        }
    },
});
app.mount("#app");

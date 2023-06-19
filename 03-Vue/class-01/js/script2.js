const app = Vue.createApp({
    data(){
        return {
            x: 0,
            y: 0
        }
    },
    methods: {
        classEvent(message) {
            console.log(message);
        },
        cursorPosition(e) {
            this.x = e.offsetX;
            this.y = e.offsetY;
        },
        displayEvent(e){
            console.log(e);
        }
    },
});
app.mount("#app");

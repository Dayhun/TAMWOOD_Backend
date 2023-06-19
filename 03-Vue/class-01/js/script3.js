const app = Vue.createApp({
    data() {
        return {
            students: [
                {
                    fullName: "Guilherme Forsetto",
                    mail: "mail@mail.com",
                    favLanguage: "PHP",
                    salary: 55000,
                    img: "https://robohash.org/utarchitectotempora.png",
                    toggle: false,
                },
                {
                    fullName: "Joao Crescencio",
                    mail: "mail2@mail.com",
                    favLanguage: "JavaScript",
                    salary: 60000,
                    img: "https://robohash.org/veritatisaliquidofficia.png",
                    toggle: false,
                },
                {
                    fullName: "Mia Lee",
                    mail: "mail3@mail.com",
                    favLanguage: "PHP",
                    salary: 65000,
                    img: "https://robohash.org/quaeratdebitisrem.png",
                    toggle: false,
                },
                {
                    fullName: "HS Lim",
                    mail: "mail4@mail.com",
                    favLanguage: "Python",
                    salary: 70000,
                    img: "https://robohash.org/nostrumfugaquaerat.png",
                    toggle: false,
                },
                {
                    fullName: "Aya Iida",
                    mail: "mail5@mail.com",
                    favLanguage: "JavaScript",
                    salary: 80000,
                    img: "https://robohash.org/eautnatus.png",
                    toggle: false,
                },
                {
                    fullName: "Santiago Ramirez",
                    mail: "mail6@mail.com",
                    favLanguage: "JavaScript",
                    salary: 60000,
                    img: "https://robohash.org/quifaceremolestiae.png",
                    toggle: false,
                },
                {
                    fullName: "Duygu Efe",
                    mail: "mail7@mail.com",
                    favLanguage: "Python",
                    salary: 85000,
                    img: "https://robohash.org/iurequasivoluptatem.png",
                    toggle: false,
                },
            ],
        };
    },
    methods: {
        userData(e) {
            console.log(e.target.value);
        },
        toggled(student){
            student.toggle = !student.toggle;
            // console.log(student.toggle);
        }
    },
});
app.mount("#app");

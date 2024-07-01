const { createApp } = Vue

createApp({
    data() {
        return {
            orario: " ",
            liste: [],
        }
    },
    methods: {
        getData() {
            axios.get('./server.php', {
                params: {
                    orario: this.orario,
                }
            })
                .then((response) => {
                    console.log(response);
                    this.liste = response.data;
                })
                .catch(function (error) {
                    console.log(error);
                });
        }
    },
    created(){
        this.getData();
    }
}).mount('#app')
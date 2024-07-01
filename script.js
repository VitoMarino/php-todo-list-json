const { createApp } = Vue;

createApp({
    data() {
        return {
            orario: " ",
            toDoLists: [],
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
                    this.toDoLists = response.data;
                })
                .catch(function (error) {
                    console.log(error);
                })
                .finally(function () {
                    // always executed
                });
        }
    },
    created(){
        this.getData();
    }
}).mount('#app')
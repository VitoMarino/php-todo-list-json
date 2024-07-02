const { createApp } = Vue

createApp({
    data() {
        return {
            todoList: [],
            apiUrl: "./api/get_list.php",
        }
    },
    methods: {
        getTodoList() {
            axios.get(this.apiUrl)
                .then((response) => {
                    console.log(response.data.tasks);
                    this.todoList = response.data.tasks;
                })
                .catch(function (error) {
                    console.log(error);
                })
                .finally(function () {
                    
                });
        },
    },
    created(){
        this.getTodoList();
    }
}).mount('#app')
const { createApp } = Vue

createApp({
    data() {
        return {
            todoList: [],
            apiUrl: "./api/get_list.php",
            newTaskName: "",
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
        addTask(taskToAdd){
            newTodoObject = {
                name: taskToAdd,
                description: taskToAdd,
                completed: false
            };
            this.todoList.push(newTodoObject);
            this.newTaskName = "";
        }
    },
    created(){
        this.getTodoList();
    }
}).mount('#app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div id="app">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-6">
                        <h1>
                            Todo List JSON
                        </h1>
                        <section class="todoList">
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-action" v-for="item in todoList" :class="item.completed ? 'text-decoration-line-through' : '' ">
                                {{item.name}} 
                            </li>
                        </ul>
                        </section>
                        <section class="user-input">
                            <input type="text" class="input-group" @keyup.enter="addTask(newTaskName)" v-model.trim="newTaskName">
                        </section>
                    </div>
                </div>
            </div>
        </main>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.7.2/axios.min.js" integrity="sha512-JSCFHhKDilTRRXe9ak/FJ28dcpOJxzQaCd3Xg8MyF6XFjODhy/YMCM8HW0TFDckNHWUewW+kfvhin43hKtJxAw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="./js/script.js"></script>
</body>
</html>
<?php 

//Prendi la lista dei todoList.json. Mostrala in json

$todoList = file_get_contents("../db/todoList.json");

echo $todoList;

?>
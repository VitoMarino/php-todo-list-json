<?php 
// Prendi la lista dei todoList.json
$todoList = file_get_contents("../db/todoList.json");

// Mostramela in formato json
header("Content-type: application/json");

echo $todoList;

?>
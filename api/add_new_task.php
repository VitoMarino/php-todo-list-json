<?php
//PROCESSO DI DECODIFICA

// Prendo il file jason
$rawJson = file_get_contents("../db/todoList.json");

// Lo trasformo in un array associativo php
$todoList = json_decode($rawJson, true)["tasks"];

// Sto aggiungendo un'array associativo al termine della mia todoList se ci sono determinate chiamate GET
if (
    isset($_GET["name"]) &&
    isset($_GET["description"]) &&
    isset($_GET["completed"])
) {
    $todoList[] = [
        'name' => $_GET["name"],
        'description' => $_GET["description"],
        // Converto con === true in un valore booleano
        'completed' => $_GET["completed"] === true,
    ];

    // Mi salvo tutta la precedenrte condizione in una variabile
    $newtodoList = [
        "tasks" => $todoList
    ];

    // Aggiungo la nuova lista in un file json separato senza intaccare l'originale
    file_put_contents("../db/todoList_push.json", json_encode($newtodoList));
} else {
    http_response_code(404);
}





?>
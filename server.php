<?php
$toDoLists = [
    [
        "Impegno" => "Fare la spesa",
        "Orario" => "Ore 14:00"
    ],
    [
        "Impegno" => "Portare a spasso il cane",
        "Orario" => "Ore 15:00"
    ],
    [
        "Impegno" => "Andare in palestra",
        "Orario" => "Ore 16:00"
    ],
    [
        "Impegno" => "Andare a lavoro",
        "Orario" => "Ore 17:00"
    ],
    [
        "Impegno" => "Nuoto",
        "Orario" => "Ore 18:00"
    ],
    [
        "Impegno" => "Vedere film",
        "Orario" => "Ore 19:00"
    ],
    [
        "Impegno" => "Riposo",
        "Orario" => "Ore 20:00"
    ],
    [
        "Impegno" => "Lettura libro",
        "Orario" => "Ore 21:00"
    ]
    ];

    echo(json_encode($toDoList));

// Travesto questo array come un json.
header("Content-type: application/json");

// Recupero i dati in json.
$rawData = file_get_contents("./db/lista.json");

// Li traduco in un array. Gli chiedo che sia associativo. COME SECONDO PARAMETRO METTERE TRUE AL MOMENTO. 
$data = json_decode($rawData, true);

// Se ho una chiamata get con proprietà "Orario"
if(isset($_GET["Orario"])){
    // Sto filtrando all'interno dell'array json deodificato. Ho creato una funzione all'interno del filter che miu permette di scrivere all'interno della chiamata GET che orario voglio che mi venga visualizzato. 
    $data = array_filter($data, fn($element) => $element["Orario"] === $_GET['Orario']);
} else {
    error_log(404);
}

$jsonFilteredData = json_encode($data); // Dati filtrati in json

// Aggiungo gli elementi filtrati a listaFiltrata
file_put_contents("./db/listaFiltrata.json", $jsonFilteredData);

// Codifico in json prima di restituirlo.
echo $jsonFilteredData;


?>
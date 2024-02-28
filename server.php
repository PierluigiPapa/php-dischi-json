<?php

$database = file_get_contents(__DIR__ . '/albums.json');
$dischi = json_decode($database); //json a array associativi php

    // Creo un ciclo per passare il parametro e mostrare il disco
    if (isset($_GET['index'])) {
        $index = $_GET['index'];
        $disco_corrente = $dischi[$index]; 
        header('Content-Type: application/json');
        echo json_encode($disco_corrente); 
        die; // Utilizzo il die per interrompere immediatamente l'esecuzione dello script 
    }


header('Content-Type: application/json');

// Creo l'output
echo json_encode($dischi);
?>
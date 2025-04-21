<?php
header('Content-Type: application/json');

// Cerca tutti i file .gpx nella cartella corrente
$files = glob("*.gpx");

// Rimuove eventuali percorsi relativi e restituisce solo i nomi dei file
$files = array_map('basename', $files);

// Risposta JSON
echo json_encode($files);
?>

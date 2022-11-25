<?php

// RAW Daten aus php input sammeln

$json = file_get_contents('php://input');

// JSON in PHP Objekt dekodieren
$data = json_decode($json);
if (isset($data)) {
    foreach ($data as $jsondata) {
        echo $jsondata;
    }
} else {
    // FOLGENDES FUNKTIONIERT NUR MIT URLENCODED RAW, NICHT MIT JSON OBJEKTEN!
    // Prüfen ob POST gesetzt und gefüllt ist.
    if (isset($_POST)) {
        // Durch alle W erte im POST iterieren und ausgeben auf Seite zum Testen.
        foreach ($_POST as $value) {
            if (is_array($value)) {
                foreach ($value as $level1) {
                    echo "$level1";
                }
            }
            echo "$value";
        }
    } else {
        echo ("POST ist leer.");
    }
}

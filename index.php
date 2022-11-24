<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
require_once "./php/include.php";

/* Variablen definieren und initialisieren wie folgt: */
$site = $_GET["site"] ?? "";

// Header importieren
include "./view/header.php";


/* Hier die möglichen Links einsetzen um auf Klicks zu reagieren. */
switch ($site) {
    case "user_form":
        include "./view/user_form.php";
        break;
    case "test_post":
        // Zum Testen der per HTTP POST Request gesendeten Daten.
        include "./view/test_post.php";
        break;  
    default:
        # $kursController->setKursListeToGet();
        include "./view/startseite.php";
        break;
}

// Footer importieren
include "./view/footer.php";
# -------------------------------------------------------
?>
<?php
# LH 
# PHP Seite um Upload von Bildern zu testen.
# Zuerst definieren wir die Parameter für die Dateinamen und Ordnerstruktur, welche wir vorsehen.
$uploaddir = '../uploads/';
# $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
$uploadfile = $uploaddir . 'pic.png';

# echo '<pre>'; # Ist glaube ich nicht nötig.
# Datei aus dem Array $_FILES nehmen und lokal unter "../uploads/pic.png" ablegen.
# if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    # LH HIER MUSS DANN DIE PROZESSKETTE ANGESTOSSEN WERDEN, UM DAS BILD AUSZULESEN MIT TESSERACT!
    # DIE ANTWORT (RESPONSE) KANN DANN EINFACH ALS echo BEFEHL ausgegeben werden! (Siehe ../view/testpost.php)
    echo "Upload erfolgreich.\n";
} else {
    # Wenn Datei-Upload Fehlerhaft: 
    echo "Possible file upload attack!\n";
}

# TODO:  Debugging ist final zu entfernen: 
echo "\nDebugging Informationen:\n";
print_r($_FILES);
?>
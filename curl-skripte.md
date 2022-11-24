# cURL Skripte zum Testen der Web-API auf Localhost:

## JSON Daten per POST senden
- curl -k -X POST -H "Content-Type: application/json" -d '{"Wert1":"AAAAA", "Wert2":"BBBBB"}' https://localhost/api/view/test_post.php

## URLENCODED Daten per POST senden
- curl -k -X POST -H "Content-Type: application/x-www-form-urlencoded" -d "Wert1=LALALALALALAA" https://localhost/api/view/test_post.php
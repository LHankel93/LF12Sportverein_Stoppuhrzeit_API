# cURL Skripte zum Testen der Web-API auf Localhost:

## JSON Daten per POST senden
- curl -k -X POST -H "Content-Type: application/json" -d '{"Wert1":"AAAAA", "Wert2":"BBBBB"}' https://localhost/<REPOSITORY_ORDNER>/view/test_post.php
* Werte in <> müssen der eigenen Ordnerstruktur angepasst werden. Hierbei ist <REPOSITORY_ORDNER> durch den Ordnernamen auszutauschen, welchen Ihr für das Repository genommen habt!
* Da ich meinen Repository Ordner "api" genannt habe, würde die Abfrage bei mir folgendermaßen lauten: 
```powershell
curl -k -X POST -H "Content-Type: application/json" -d '{"Wert1":"AAAAA", "Wert2":"BBBBB"}' https://localhost/api/view/test_post.php
```
## URLENCODED Daten per POST senden
- curl -k -X POST -H "Content-Type: application/x-www-form-urlencoded" -d "Wert1=LALALALALALAA" https://localhost/<REPOSITORY_ORDNER>/view/test_post.php
* Werte in <> müssen der eigenen Ordnerstruktur angepasst werden. Hierbei ist <REPOSITORY_ORDNER> durch den Ordnernamen auszutauschen, welchen Ihr für das Repository genommen habt!
* Da ich meinen Repository Ordner "api" genannt habe, würde die Abfrage bei mir folgendermaßen lauten: 
```powershell
curl -k -X POST -H "Content-Type: application/x-www-form-urlencoded" -d "Wert1=LALALALALALAA" https://localhost/api/view/test_post.php
```

## Anmerkung zu Server:
Der Server wurde am 11.01.2023 extern eingestellt auf einer Debian Maschine bei Christopher. Die URL wäre nun: 
```url
fehlt noch
```
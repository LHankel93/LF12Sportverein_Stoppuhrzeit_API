# LH Python Test Skript, um das Hochladen per POST HTTP Befehl zu testen.
# Es wird das Modul "requests" von Pip benötigt!
# localpath ist der lokale Pfad für die Bild-Datei für das Hochladen.
# serverurl ist die URL zu dem Server, welcher angesprochen werden soll.
# r.text gibt das RESPONSE aus und kann gespeichert werden in eine andere Variable!
# Hier sollte dann quasi die Stoppuhrzeit als String zurückerhalten werden.

import requests
localpath = './assets/test.png'
serverurl = 'http://localhost/api/view/uploadfile.php' # 'http://localhost/api/view/uploadfile.php' zum Testen lokal auf XAMPP Server 

with open(localpath, 'rb') as f:
    r = requests.post(serverurl, # TODO: LH Muss auf die URL des externen Server angepasst werden!
                      files={'userfile': f})
print(r.text)

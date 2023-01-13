# Anleitung für die Erstellung von Gource Commit-Aktivitätsvideos

## Voraussetzungen
- gource (https://gource.io/)
- ffmpeg (https://ffmpeg.org/download.html)[^1]
- idealerweise Powershell, ansonsten müssen die mitgelieferten Skripte u.U. angepasst werden.

## Einrichtung
1. ffmpeg installieren und die Binaries dem PATH hinzufügen (Windows Systemumgebungsvariablen > PATH > Neu)
2. gource installieren mit dem Installer. (Sollte automatisch den PATH füllen.)

## Verwendung
1. Repository Ordner öffnen
2. Im Repository Ordner Powershell öffnen
3. folgendes Skript eingeben (kann natürlich angepasst werden nach Euren Wünschen)
4. ```gource -1920x1080 -stop-position 1.0 --auto-skip-seconds 0.5 --max-file-lag 0.1 --title "LF12 Gruppenprojekt Stoppuhrzeit API Webschnittstelle mit OCR Lorenz Hankel, Maria Siegmann, Gökmen Demir, Alex Jetke, Gurjit Kaur" --highlight-all-users --bloom-multiplier 0.4 --bloom-intensity 0.6 --highlight-all-users --hide mouse -seconds-per-day 1.5 --output-framerate 60 --output-ppm-stream output.ppm && ffmpeg -y -r 60 -f image2pipe -vcodec ppm -i output.ppm -r 60 -c:v libx265 -level 4.1 -crf 15 -preset veryslow out.mp4 && Remove-Item output.ppm``` [2]

[^1]: Ich empfehle den ffmpeg full build, um Hardwareunterstützung mit zu erhalten.

[^2]: Achtung, in dem Prozess wird eine relativ große `output.ppm` Datei erstellt und am Ende wieder gelöscht. Diese kann aufwärts von 9 GB gross werden.
from PIL import Image
from pytesseract import pytesseract

class getText:
    def extract_text_from_image(image_path):
        # Laden des Bildes
        image = Image.open(image_path)

        #Verwendung von pytesseract, um Text aus dem Bild zu extrahieren
        text = pytesseract.image_to_string(image)

        #Ausgabe des extrahieren Texts
        print(text)

    #Beispieleaufruf TODO
    extract_text_from_image("/Users/Gurjit/LF12Sportverein_Stoppuhrzeit/image")
   
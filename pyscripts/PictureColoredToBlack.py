from PIL import Image
from pathlib import Path

class PictureColoredToBlack():
    
    def ChangeToBlackWhite(self,picture):
        path = "./LF12Sportverein_Stoppuhrzeit/ConvertingPictures/"
        downloads_path = str(Path.home() / "Downloads")

        picture_to_black_and_white = Image.open(path+ picture).convert('L')

        picture_to_black_and_white.save(downloads_path +'/'+'greyscaled_'+ picture)
        

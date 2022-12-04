from PIL import Image
from pathlib import Path

class PictureColoredToBlack():
    
    def ChangeToBlackWhite(self,picture):
        path = "../assets/"
        target_path = str("../assets/")

        picture_to_black_and_white = Image.open(path+ picture).convert('L')

        picture_to_black_and_white.save(target_path +'/'+'greyscaled_'+ picture)
        
    picture = "beispielbild.jpg"
    ChangeToBlackWhite(picture)
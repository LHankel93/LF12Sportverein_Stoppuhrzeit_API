import requests
with open('./assets/test.png', 'rb') as f:
    r = requests.post('http://localhost/api/view/uploadfile.php', # LH Muss auf die URL des externen Server angepasst werden!
                      files={'userfile': f})
print(r.text)

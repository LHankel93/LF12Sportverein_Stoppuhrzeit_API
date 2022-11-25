import sys
import os
import urllib.parse

# Simples Python Skript welches einen int Eingangswert braucht, +1 rechnet und den Wert zurückgibt.
def add1(a: int):
    return (a+1)


sent_query = os.environ['QUERY_STRING']
query_list = sent_query.split('=')
query_dict = urllib.parse.parse_qs(os.envrion['QUERY_STRING'])

a = int(query_dict['foo'])[2:-2]

# Der "Return" sozusagen.
print(add1(a))
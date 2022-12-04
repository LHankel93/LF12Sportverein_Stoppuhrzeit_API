import sys
import os
import urllib.parse

# Simples Python Skript welches einen int Eingangswert braucht, +1 rechnet und den Wert zurückgibt.


def add1(n: int):
    return (n+1)


n = int(sys.argv[1])

# Der "Return" sozusagen.
print(add1(n))

from inspect import getmembers
from posixpath import split
from pprint import pprint

cad = "jesus gonzalez nieto"
arrCad = cad.split()

result = ""
for i in arrCad:
    result = "".join([result, i[0].upper()])
print(result)

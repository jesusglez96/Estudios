p1 = 100
p2 = 200
p3 = 300

# Una que sea verdadera si la suma de los 3 artículos supera los 300
# euros, o si alguno de ellos supera los 200
print((p1 > 300 and p2 > 300 and p3 > 300)
      or (p1 > 200 or p2 > 200 or p3 > 200))
# Una que sea verdadera si sólo uno de los artículos supera los 200 euros
if p1 > 200 and p2 < 200 and p3 < 200:
    print(True)
elif p1 < 200 and p2 > 200 and p3 < 200:
    print(True)
elif p1 < 200 and p2 < 200 and p3 > 200:
    print(True)
else:
    print(False)
# Una que sea verdadera si alguno de los artículos tiene un precio que sea par
if (p1 % 2 == 0) or (p2 % 2 == 0) or (p3 % 2 == 0):
    print(True)
else:
    print(False)
# Una que sea verdadera si 2 artículos tienen un precio múltiplo de 5, y el
# otro artículo no.
if (p1 % 5 == 0) and (p2 % 5 != 0) and (p3 % 5 != 0):
    print(True)
elif (p1 % 5 != 0) and (p2 % 5 == 0) and (p3 % 5 != 0):
    print(True)
elif (p1 % 5 != 0) and (p2 % 5 != 0) and (p3 % 5 == 0):
    print(True)
else:
    print(False)

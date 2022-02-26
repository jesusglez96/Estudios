a1 = float(input("Altura 1: "))
a2 = float(input("Altura 2: "))
a3 = float(input("Altura 3: "))

z1 = float(input("Zapato 1: "))
z2 = float(input("Zapato 2: "))
z3 = float(input("Zapato 3: "))

print(a1 > 1.6 and a2 > 1.6 and a3 > 1.6)
print(z1 < 44 and z2 < 44 and z3 < 44)
print((z1 > 40 and z1 <= 44) and (
    z2 > 40 and z2 <= 44) and (z3 > 40 and z3 <= 44))

print((a1 > 1.8 and z1 < 40) or (a2 > 1.8 and z2 < 40) or (a3 > 1.8 and z3 < 40))

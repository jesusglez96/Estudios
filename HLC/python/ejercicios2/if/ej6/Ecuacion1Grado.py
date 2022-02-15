print("ax + b = 0")
a = int(input("Introduce el valor a: "))
b = int(input("Introduce el valor b: "))
# Si a no es 0, la solución es x = –b/a
if a != 0:
    x = -b/a
# Si a es 0 pero b no es 0, debe indicar "solución imposible"
elif a == 0 and b != 0:
    x = "Solucion imposible"
# Si a y b son 0, debe indicar "solución indeterminada"
elif a == 0 and b == 0:
    x = "Solucion indeterminada"
else:
    x = "Error"
print(x)

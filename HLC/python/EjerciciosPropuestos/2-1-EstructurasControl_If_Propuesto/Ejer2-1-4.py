nota = float(input("Introduce la nota: "))

if 0 <= nota < 5:
    print("Has suspendido")
elif 5 <= nota < 7:
    print("Has aprobado con un bien")
elif 7 <= nota < 9:
    print("Has aprobado con un notable")
elif 9 <= nota <= 10:
    print("Has aprobado con un sobresaliente")
else:
    print("Nota erronea")

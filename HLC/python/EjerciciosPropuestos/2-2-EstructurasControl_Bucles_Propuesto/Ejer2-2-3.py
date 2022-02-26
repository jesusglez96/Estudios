max = int(input("Ingresa el numero a alcanzar: "))
cont = 0
for i in range(1, max):
    if (i % 3) == 0:
        print(f"Multiplo de 3: {i}")
        cont += i

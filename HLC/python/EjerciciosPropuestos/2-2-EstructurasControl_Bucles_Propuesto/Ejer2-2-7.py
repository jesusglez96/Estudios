num = int(input("Introduce un numero: "))
esPrimo = True
for i in range(2, num):
    if num % i == 0:
        esPrimo = False
print("El numero introducido es primo." if esPrimo else "El numero introducido no es primo.")

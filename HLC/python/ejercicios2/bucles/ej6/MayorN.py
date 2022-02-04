import math
range = int(input("Ingresa numero de repeticiones: "))
max = 0
min = math.inf
while range != 0:
    num = int(input("Numero: "))
    if num > max:
        max = num
    elif num < min:
        min = num
    range -= 1
print(f"Maximo: {max}, minimo: {min}")

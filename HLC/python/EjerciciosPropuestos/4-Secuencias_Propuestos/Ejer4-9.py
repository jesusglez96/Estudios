import pprint

nums = []
op = int(input("Introduce un numero negativo para salir o positivo para continuar... "))
while not op < 0:
    nums.append(op)
    op = int(
        input("Introduce un numero negativo para salir o positivo para continuar... "))
clonado = list(set(nums))

print("Lista original:", *nums)
print("Lista copiada:", *clonado)

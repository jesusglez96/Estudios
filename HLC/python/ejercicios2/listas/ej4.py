# Programa que declare tres listas ‘lista1’, ‘lista2’ y ‘lista3’ de cinco enteros cada uno,
# pida valores para ‘lista1’ y ‘lista2’ y calcule lista3=lista1+lista2
lista1 = []
lista2 = []
lista3 = []

for i in range(5):
    num = int(input("Introduce un numero para la lista 1... "))
    lista1.append(num)
    num = int(input("Introduce un numero para la lista 2... "))
    lista2.append(num)

for i in range(len(lista1)):
    lista3.append(lista1[i]+lista2[i])

print("Lista1:", *lista1)
print("Lista2:", *lista2)
print("Lista3:", *lista3)

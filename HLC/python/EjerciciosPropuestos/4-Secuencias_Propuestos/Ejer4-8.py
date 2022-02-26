from operator import index
from pprint import pp, pprint
from traceback import print_tb

articulos = [float(input(f"Introduce el precio del articulo {i+1}... "))
             for i in range(5)]
sucursal1 = [int(input(f"Sucursal 1: cantidad vendida del articulo {i+1}: ")) for i in range(
    len(articulos))]
sucursal2 = [int(input(f"Sucursal 2: cantidad vendida del articulo {i+1}: ")) for i in range(
    len(articulos))]
sucursal3 = [int(input(f"Sucursal 3: cantidad vendida del articulo {i+1}: ")) for i in range(
    len(articulos))]
sucursal4 = [int(input(f"Sucursal 4: cantidad vendida del articulo {i+1}: ")) for i in range(
    len(articulos))]

for i in range(len(articulos)):
    print(f"Cantidad total vendida del articulo {i+1}:",
          sucursal1[i] + sucursal2[i] + sucursal3[i] + sucursal4[i])

print("Total de articulos vendidos en la sucursal 2:", sum(sucursal2))
print("Cantidad de articulos 3 vendidos en la sucursal 1:", sucursal1[2])
recaudacion = [0, 0, 0, 0]
for i in range(len(articulos)):
    recaudacion[0] += float(sucursal1[i]) * articulos[i]
    recaudacion[1] += float(sucursal2[i]) * articulos[i]
    recaudacion[2] += float(sucursal3[i]) * articulos[i]
    recaudacion[3] += float(sucursal4[i]) * articulos[i]

print("Total de recaudaciones:")
print(
    f"Sucursal 1: {recaudacion[0]}, Sucursal 2: {recaudacion[1]}, Sucursal 3: {recaudacion[2]}, Sucursal 4: {recaudacion[3]}")
print("Recaudacion total de la empresas:", sum(recaudacion))
print("Sucursal con mas recaudaciones:",
      recaudacion.index(max(recaudacion)) + 1)

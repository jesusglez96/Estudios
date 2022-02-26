min = []
max = []
medias = []

for i in range(5):
    temp = float(input('Introduce la temperatura maxima... '))
    max.append(temp)
    temp = float(input('Introduce la temperatura minima... '))
    min.append(temp)
    medias.append((max[i]+min[i])/2)
print("Las medias son:", *medias)
diasMaximos = []
temp = float(input('Introduce una temperatura maxima... '))
for i in range(len(max)):
    if temp == max[i]:
        diasMaximos.append(i+1)
if len(diasMaximos) > 0:
    print("Los dias cuyas maximas son iguales a la introducida son:", *diasMaximos)
else:
    print("No hay dias encontrados")

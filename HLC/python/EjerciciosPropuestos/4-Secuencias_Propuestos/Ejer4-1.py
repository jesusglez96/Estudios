notas = []
for i in range(1, 6):
    notas.append(int(input(f'Introduce la nota {i}: ')))

print("Las notas son:", *notas)
print("Nota mas alta:", max(notas))
print("Nota mas baja:", min(notas))
print("Nota mas baja:", min(notas))
print("La media de las notas es:", sum(notas)/len(notas))

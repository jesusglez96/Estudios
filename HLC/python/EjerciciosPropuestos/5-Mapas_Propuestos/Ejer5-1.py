
frutas = []
for i in range(2):
    frutas.append({
        "nombre": input(f"Introduce el nombre de la fruta {i+1}... "),
        "precio": float(input(f"Introduce el precio de la fruta {i+1}... "))
    })
op = ""
while not(op == "n"):
    nom = input("Introduce el nombre de la fruta a buscar... ")
    inFruta = False
    pos = 0
    for fruta in frutas:
        if fruta["nombre"] is nom:
            inFruta = True
            cant = float(input(
                "Introduce la cantidad vendida de la fruta a buscar... "))
            print("El ingreso total es de:", fruta["precio"]*cant)
    if not(inFruta):
        print("Error. Fruta no encontrada")
    op = input("Realizar otra consuta? (s/n) ").lower()
print("Adios.")

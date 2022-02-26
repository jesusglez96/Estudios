agenda = []
op = 0
print("AGENTA TELEFONICA 2022", end="\n\n")

while op != 5:
    print("\nSelecciona una opcion:\n1. Añadir o modificar\n2. Buscar\n3. Borrar\n4. Listar\n5. Salir")
    op = int(input("Introduce la opcion: "))
    if op == 1:
        nom = input("\nIntroduce el nombre a buscar... ")
        existe = False
        for user in agenda:
            if user["name"] == nom:
                print(f"Telefono: {user['number']}")
                mod = input("Modificar? (s/n): ").lower()
                if mod == "s":
                    user["numer"] = int(
                        input("Introduce el numero de telefono nuevo: "))
        if not(existe):
            print("Error. Usuario no encontrado")
            nuevo = input("Introducir nuevo usuario? (s/n): ").lower()
            if nuevo == "s":
                agenda.append({
                    "nombre": input("Introduce el nombre del nuevo usuario... "),
                    "number": int(
                        input("Introduce el numero del nuevo usuario... "))
                })
    elif op == 2:
        cad = input("\nIntroduce cadena a buscar... ")
        existe = False
        listUsers = []
        for user in agenda:
            if user["nombre"].contains(cad):
                existe = True
                listUsers.append(user["nombre"])
        if existe:
            print(*listUsers, sep="\n")
        else:
            print("Error. Usuario no encontrado")
    elif op == 3:
        name = input("\nIntroduce usuario a borrar... ")
        existe = False
        for user in agenda:
            if user["nombre"] == cad:
                existe = True
                borrar = input("Borrar usuario? (s/n): ").lower()
                if borrar == "s":
                    listUsers.remove(user)
                    print("Usuario borrado")
        else:
            print("Error. Usuario no encontrado")
    elif op == 4:
        for user in agenda:
            print(f"Nombre: {user['nombre']}, Telefono: {user['number']}")
print("\nAdios.\n")

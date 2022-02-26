def programa():
    cad = input("Ingresa una cadena... ")
    cantidad = sum(1 for let in cad if let.isupper())
    return cantidad


print(programa())

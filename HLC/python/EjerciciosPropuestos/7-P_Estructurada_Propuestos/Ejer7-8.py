def cuenta_letras(list, lt):
    cont = sum(1 if name.startswith(lt) else 0 for name in list)
    return cont


list = [input("Introduce un nombre...") for i in range(3)]
lt = input("Introduce la letra a buscar... ")

print(cuenta_letras(list, lt))

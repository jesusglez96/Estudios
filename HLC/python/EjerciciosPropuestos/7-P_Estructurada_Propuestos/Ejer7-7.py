def cuenta(list):
    cuenta = sum(1 if i > 20 else 0 for i in edades)
    return cuenta


edades = [int(input("Ingresa una edad... ")) for i in range(10)]

print(cuenta(edades))

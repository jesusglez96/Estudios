def cuantos_anios(anio_init, anio_act):
    return anio_act - anio_init


anio_act = int(input('Introduce el anio actual... '))
for i in range(3):
    name = input(f"Introduce el nombre de la persona {i+1}... ")
    anio_init = int(input(f'Introduce el anio de nacimiento de {name}... '))
    print(f"{name} cumple este anio", cuantos_anios(
        anio_init, anio_act), "anios")

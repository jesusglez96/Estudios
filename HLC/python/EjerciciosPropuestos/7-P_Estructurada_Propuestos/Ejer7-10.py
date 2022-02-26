def es_bisiesto(ann):
    isBisiesto = False
    if (not(ann % 100 == 0) and ann % 4 == 0) or ann % 400 == 0:
        isBisiesto = True
    if isBisiesto:
        return "Es bisiesto"
    else:
        return "No es bisiesto"


ann = int(input("Introduce un anio... "))
print(es_bisiesto(ann))

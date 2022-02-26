def mas_larga(list):
    mas = list[0]
    for i in list:
        if len(mas) < len(i):
            max = i
    return mas


list = ["Hola pesicola", "Hola caracola", "Hello world"]
print(mas_larga(list))

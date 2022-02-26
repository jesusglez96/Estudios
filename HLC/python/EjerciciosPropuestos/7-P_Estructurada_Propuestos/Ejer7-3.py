def filtrar_palabras(list, n):
    words = []
    for i in list:
        if len(i) > n:
            words.append(i)
    return words


list = ["patata", "cocacola", "caracole", "hijo", "taco"]
print(filtrar_palabras(list, 6))

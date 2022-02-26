def contar_vocales(word):
    a = word.count('a')
    e = word.count('e')
    return [a, e]


word = input('Introduce la palabra... ')

print(contar_vocales(word))

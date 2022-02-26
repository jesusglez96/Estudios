list = []
num = int(input("Introduce un numero... "))
while (num >= 0):
    list.append(num)
    num = int(input("Introduce un numero... "))
print(*list)

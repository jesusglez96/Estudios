tabla = [[1 if x is y else 0 for x in range(5)]for y in range(5)]
for line in tabla:
    print(*line)

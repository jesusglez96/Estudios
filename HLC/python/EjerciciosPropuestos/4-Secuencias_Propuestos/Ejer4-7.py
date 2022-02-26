table = [
    [1 if x is 0 or x is 14 or y is 0 or y is 4 else 0 for x in range(15)]for y in range(5)]
for line in table:
    print(*line)

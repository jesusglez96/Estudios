import math


def max_in_list(list):
    max = -math.inf
    for i in list:
        if i > max:
            max = i
    return max


list = [1, 2, 3, 45, 100, 200, 300, 400]
print(max_in_list(list))

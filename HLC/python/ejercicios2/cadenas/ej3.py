cad = input("Introduce una cadena: ").lower()

if cad == cad[::-1]:
    print(f"Tremendesimo!! Palindromo!! {cad} es igual que {cad[::-1]}")
else:
    print(f"F en el chat. No hay palindromo")

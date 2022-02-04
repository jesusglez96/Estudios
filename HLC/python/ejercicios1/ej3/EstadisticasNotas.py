apo = int(input("Aprobados: "))
no = int(input("Notables: "))
sob = int(input("Sobresalientes: "))
sus = int(input("Suspensos: "))

alums = apo + sus + no + sob
apoTotal = alums - sus

porApo = int(apoTotal * 100 / alums)
porSus = int(sus * 100 / alums)
porBi = int(apo * 100 / alums)
porNo = int(no * 100 / alums)
porSob = int(sob * 100 / alums)

print(f"Porcentaje de aprobados total: {str(porApo)}%")
print(f"Porcentaje de suspensos: {str(porSus)}%")
print(f"Porcentaje de bien: {str(porBi)}%")
print(f"Porcentaje de notables: {str(porNo)}%")
print(f"Porcentaje de sobresalientes: {str(porSob)}%")

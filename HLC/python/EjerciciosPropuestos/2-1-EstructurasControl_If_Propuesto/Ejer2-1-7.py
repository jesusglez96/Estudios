# Haz un proyecto llamado CumploAños.py que le pida al usuario el día, mes y
# año de nacimiento(guárdalos en 3 variables enteras llamadas dNac, mNac y
# aNac) y el día, mes y año actuales(guárdalos en otras 3 variables enteras
# llamadas dAct, mAct y aAct). Con esos datos, indícale al usuario si ya ha
# cumplido años este año, o todavía no.

dNac = int(input("Introduce el dia de nacimiento... "))
mNac = int(input("Introduce el mes de nacimiento... "))
aNac = int(input("Introduce el anio de nacimiento... "))
dAct = int(input("Introduce el dia actual... "))
mAct = int(input("Introduce el mes actual... "))
aAct = int(input("Introduce el anio actual... "))
msg = "Eres menor de edad"
if aAct - aNac >= 18:
    msg = "Eres mayor de edad"
print(msg)

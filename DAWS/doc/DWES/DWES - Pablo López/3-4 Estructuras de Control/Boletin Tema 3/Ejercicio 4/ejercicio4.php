<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Vamos a ampliar uno de los ejercicios de la relación anterior para considerar las horas extras. Escribe
un programa que calcule el salario semanal de un trabajador teniendo en cuenta que las horas
ordinarias (40 primeras horas de trabajo) se pagan a 12 euros la hora. A partir de la hora 41, se
pagan a 16 euros la hora-->

    <?php 
        $horas = $_GET["horas"];
        
        if ($horas>40){
            $horasExtras = $horas-40;
            $sueldoBase = 40*12;
            $sueldoFinal = $sueldoBase + ($horasExtras*16);

            echo "Le corresponde un salario semanal de: ",$sueldoFinal,"€";
        } else {
            $sueldoBase = $horas*12;

            echo "Le corresponde un salario semanal de: ",$sueldoBase,"€";
        }
    ?>

<br>
    <input type="button" onclick="history.back()" name="volver" value="Volver">
</body>
</html>
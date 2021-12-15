<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Escribe un programa que utilice las variables $x y $y. Asignales los valores 144 y 999 respectivamente. A continuación, muestra por pantalla el valor de cada variable, la suma, la resta, la división
y la multiplicación.-->
    <?php
        $x = 144;
        $y = 999;

        echo "Valor de X: ", $x,"<br>";
        echo "Valor de Y: ", $y, "<br><br>";
        echo "Suma: ",$x + $y, "<br>";
        echo "Resta: ",$x - $y, "<br>";
        echo "Multiplicación: ", $x*$y, "<br>";
        echo "División: ", $x / $y, "<br>";
    ?>

</body>
</html>
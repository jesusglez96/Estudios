<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Diseñar una web para jugar a la lotería primitiva. En un formulario se pedirá introducir la
combinación de 6 números entre 1 y 49 y el numero de serie entre 1 y 999. Mostrar la
combinación generada y la introducida por el usuario en dos filas de una tabla, para que
compruebe los aciertos. -->

    <?php 
        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];
        $num3 = $_GET["num3"];
        $num4 = $_GET["num4"];
        $num5 = $_GET["num5"];
        $num6 = $_GET["num6"];
        $numSerie = $_GET["serie"];

        $n1 = rand(1,49);
        $n2 = rand(1,49);
        $n3 = rand(1,49);
        $n4 = rand(1,49);
        $n5 = rand(1,49);
        $n6 = rand(1,49);
        $nSerie = rand(1,999);
        
    ?>

    <table border="1" style="border-collapse: collapse">
        <tr>
            <th align="left">COMBINACION GANADORA</th>
            <td><?php echo $n1," ", $n2, " ", $n3," ", $n4, " ", $n5, " ",$n6, " Serie: ", $nSerie ?></td>
        </tr>
        <tr>
        <th>COMBINACION INTRODUCIDA</th>
            <td><?php echo $num1," ", $num2, " ", $num3," ", $num4, " ", $num5, " ",$num6, " Serie: ", $numSerie ?></td>
        </tr>
    </table>
</body>
</html>
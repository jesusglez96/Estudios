<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wth=device-wth, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Mejora el ejercicio de la lotería primitiva del tema anterior. Ahora los números se seleccionan
de un boleto al estilo “bingo” con filas y columnas, para representar los números
seleccionados se usarán checkbox, y para el número de serie una caja de texto. Cuando se
pulse el botón jugar, se mostrará la combinación ganadora generada aleatoriamente y los
aciertos que ha tenido. No se usarán estructuras repetitivas ni arrays, se mostrará la
combinación ganadora en una tabla con una sola fila y un número en cada columna.
Se mostrará el número de aciertos que ha teno el usuario y cuánto dinero ha ganado:
-menos de 4 aciertos: nada
-4 aciertos: dinero vuelto
-5 aciertos: 30 euros
-6 aciertos: 100 euros
-número de serie: Si se acierta se sumarán 500 euros independientemente del número de
aciertos.
Nota: no hace falta comprobar todos los números, solo los de la combinación ganadora, por lo
que no se controla si el usuario selecciona más de 6 números.
-->

<form action="loteria4.php" method="get">
    <h1>¡¡¡Lotería!!!</h1>
    Introduce una combinación de 6 números entre 1 y 49 y un número de serie entre 1 y 999.<br><br>
    
    <table border="1" style="border-collapse: collapse">
            <?php
                $num = 1; 
                for ($i = 0; $i <7; $i++){
                    echo "<tr>";
                    for ($f = 0; $f<7; $f++){
                        echo "<td><input type='checkbox' name='$num' >$num</td>";
                        $num++;
                    }
                    echo "</tr>";
                }
            ?>
    </table>
<br>
    Serie: <input type="number" name="serie" min="1" max="999">

<br><br>
    <input type="submit" ="Jugar">
    


</form>

</body>
</html>
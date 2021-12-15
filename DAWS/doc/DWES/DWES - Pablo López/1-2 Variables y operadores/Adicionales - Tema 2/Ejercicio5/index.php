<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Diseñar un desarrollo web simple con PHP que dé respuesta a la necesidad que se plantea a
    continuación:
    Un operario de una fábrica recibe cada cierto tiempo un depósito cilíndrico de dimensiones
    variables, que debe llenar de aceite a través de una toma con cierto caudal disponible. Se
    desea crear una aplicación web que le indique cuánto tiempo transcurrirá hasta el llenado del
    depósito. Para calcular dicho tiempo el usuario introducirá los siguientes datos: diámetro y
    altura del cilindro y caudal de aceite (litros por minuto). Una vez introducidos se mostrará el
    tiempo total en horas y minutos que se tardará en llenar el cilindro. -->

    <form action="ejercicio5.php" method="get">
        <h3>Introduce los datos del cilindro para calcular el tiempo de llenado:</h3>
        Altura (Metros):<br><input type="number" name="altura"><br>
        Diámetro (Metros):<br><input type="number" name="diametro"><br>
        Caudal de aceite (Litros por minuto):<br><input type="number" name="caudal"><br><br>
        <input type="submit" value="Calcular">
    </form>

</body>
</html>
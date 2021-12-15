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

    <form action="loteria.php" method="get">
        <h1>¡¡¡Lotería!!!</h1>
        Introduce una combinación de 6 números entre 1 y 49 y un número de serie entre 1 y 999.<br><br>
        Combinación: <input type="number" name="num1" min="1" max="49">
        <input type="number" name="num2" min="1" max="49">
        <input type="number" name="num3" min="1" max="49">
        <input type="number" name="num4" min="1" max="49">
        <input type="number" name="num5" min="1" max="49">
        <input type="number" name="num6" min="1" max="49">
        Serie: <input type="number" name="serie" min="1" max="999"><br>
        <input type="submit" value="Enviar">

    </form>
</body>
</html>
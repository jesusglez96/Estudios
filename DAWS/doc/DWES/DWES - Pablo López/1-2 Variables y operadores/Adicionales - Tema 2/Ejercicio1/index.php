<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Diseñar un formulario web que pida la altura y el diámetro de un cilindro. Una vez el usuario
introduzca los datos y pulse el botón calcular, deberá calcularse el volumen del cilindro y
mostrarse el resultado en el navegador. Mostrar la imagen de un cilindro junto al resultado y
un título "Calculo del volúmen de un cilindro", intenta dar un aspecto agradable a la página de
resultado. -->

    <form action="volumenCilindro.php" method="get">
        Introduce los datos de un cilindro para calcular su volumen:<br>
        Altura:<br><input type="number" name="altura"><br>
        Diámetro:<br><input type="number" name="diametro"><br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>
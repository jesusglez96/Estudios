<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Mostrar en una página varios parametros para configurar el aspecto de otra página: color de
fondo, tipo de letra, alineación del texto, imagen del banner (entre 3 posibles), y demás reglas
de estilo que se te ocurran. Una vez la información se mostrará una página con el contenido
que desees acorde a los estilos elegidos. 
-->
    <form action="aspecto.php" method="get">
        <h2>Configuración de aspecto</h2>
        Elige entre las siguientes opciones:<br>
        Color de fondo:
        <select id="color" name="color">
            <option value="red">Rojo</option>
            <option value="green">Verde</option>
            <option value="yellow">Amarillo</option>
        </select>
        <br>Tipo de letra:
        <select name="letra">
            <option value="arial">Arial</option>
            <option value="verdana">Verdana</option>
            <option value="georgia">Georgia</option>
        </select>
        <br>Imagen:<br>
        <input type="radio" name="imagen" value="perro">Perro<br>
        <input type="radio" name="imagen" value="gato">Gato<br>
        <input type="radio" name="imagen" value="loro">Loro<br>
        <br><input type="submit" value="Enviar">
    </form>
</body>
</html>
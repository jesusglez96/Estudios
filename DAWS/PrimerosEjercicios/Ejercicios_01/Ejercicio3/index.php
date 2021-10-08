<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <form action="pagina.php" method="post">
        <p>
            <label for="bgc">Color de fondo: </label>
            <input type="color" name="bgc" id="bgc">
        </p>
        <p>
            <label for="letra">Tipo de letra: </label>
            <select name="letra" id="letra">
                <option value="Roboto">Roboto</option>
                <option value="Stick No Bills">Stick No Bills</option>
                <option value="Caramel">Caramel</option>
            </select>
        </p>
        <p>
            <label for="alineacion">Alineación: </label>
            <input type="radio" name="alineacion" value="left" checked>Izquierda
            <input type="radio" name="alineacion" value="center">Centro
            <input type="radio" name="alineacion" value="right">Derecha
        </p>
        <p>
            <label for="imagen">Imagen: </label>
            <select name="imagen" id="imagen">
                <option value="husky-siberiano-bosque.png">husky</option>
                <option value="gato-marron_0.png">gato</option>
                <option value="camaleon.png">camaleon</option>
            </select>
        </p>
        <p>
            <label for="enviar"></label>
            <button type="submit" name="enviar" id="enviar">Enviar</button>
        </p>
    </form>
</body>
</html>
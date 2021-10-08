<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <form action="loteria.php" method="post">           
        <p>
            <label for="numero">Numeros: </label>
            <input type="number" name="numero1" id="numero1" min=1 max=49>
            <input type="number" name="numero2" id="numero2" min=1 max=49>
            <input type="number" name="numero3" id="numero3" min=1 max=49>
            <input type="number" name="numero4" id="numero4" min=1 max=49>
            <input type="number" name="numero5" id="numero5" min=1 max=49>
            <input type="number" name="numero6" id="numero6" min=1 max=49>
        </p>
        <p>
            <label for="serie">Serie: </label>
            <input type="number" id="serie" name="serie" min=1 max=999>
        </p>
        <p>
            <button type="submit">Enviar</button>
        </p>
    </form>
</body>
</html>
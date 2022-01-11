<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acces</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .container {
            width: 800px;
            margin: 10px auto;
            flex-direction: column;
            display: flex;
            align-items: center;
            gap: 100px;
        }

        form {
            flex-direction: column;
            display: flex;
            align-items: center;
            gap: 100px;
            justify-content: space-between;
        }

        .usuario {
            width: 300px;
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Introduce el usuario para entrar en la aplicacion</h1>
        <form action="./../Controller/verificacion.php" method="get">
            <div class="usuario">
                <label for="usuario">Usuario:
                </label>
                <input type="text" name="usuario" id="usuario">
            </div>

            <input type="submit" value="Entrar">
        </form>
    </div>
</body>

</html>
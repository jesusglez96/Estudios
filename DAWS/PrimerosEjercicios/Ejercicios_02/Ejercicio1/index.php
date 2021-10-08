<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejericio 1</title>
    <style>
        img {
            width: 80%;
            height: 75%;
        }
    </style>
</head>

<body>
    <div>
        <table>
            <tr>
                <td><a href="resultado.php?num=1"><img src="camaleon/negro.png" alt=""></a></td>
                <td><a href="resultado.php?num=2"><img src="camaleon/negro.png" alt=""></a></td>
                <td><a href="resultado.php?num=3"><img src="camaleon/negro.png" alt=""></a></td>
            </tr>
            <tr>
                <td><a href="resultado.php?num=4"><img src="camaleon/negro.png" alt=""></a></td>
                <td><a href="resultado.php?num=5"><img src="camaleon/negro.png" alt=""></a></td>
                <td><a href="resultado.php?num=6"><img src="camaleon/negro.png" alt=""></a></td>
            </tr>
            <tr>
                <td><a href="resultado.php?num=7"><img src="camaleon/negro.png" alt=""></a></td>
                <td><a href="resultado.php?num=8"><img src="camaleon/negro.png" alt=""></a></td>
                <td><a href="resultado.php?num=9"><img src="camaleon/negro.png" alt=""></a></td>
            </tr>
        </table>
    </div>
    <form action="resultado.php" method="get">
        <p>
            <label for="palabraIntroducida">Introduce la palabra
                <input type="text" name="palabraIntroducida">
            </label>

        </p>
        <p>
            <input type="submit" value="Continuar">
        </p>
    </form>
</body>

</html>
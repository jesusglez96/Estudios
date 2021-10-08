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
    <?php
    if (isset($_REQUEST['intentos'])) {
        $intentos = $_REQUEST['intentos'];
    } else {
        $intentos = 0;
    }
    ?>
    <div>
        <table>
            <tr>
                <td><a href="resultado.php?num=1&intentos=<?php echo $intentos ?>"><img src="camaleon/negro.png" alt=""></a></td>
                <td><a href="resultado.php?num=2&intentos=<?php echo $intentos ?>"><img src="camaleon/negro.png" alt=""></a></td>
                <td><a href="resultado.php?num=3&intentos=<?php echo $intentos ?>"><img src="camaleon/negro.png" alt=""></a></td>
            </tr>
            <tr>
                <td><a href="resultado.php?num=4&intentos=<?php echo $intentos ?>"><img src="camaleon/negro.png" alt=""></a></td>
                <td><a href="resultado.php?num=5&intentos=<?php echo $intentos ?>"><img src="camaleon/negro.png" alt=""></a></td>
                <td><a href="resultado.php?num=6&intentos=<?php echo $intentos ?>"><img src="camaleon/negro.png" alt=""></a></td>
            </tr>
            <tr>
                <td><a href="resultado.php?num=7&intentos=<?php echo $intentos ?>"><img src="camaleon/negro.png" alt=""></a></td>
                <td><a href="resultado.php?num=8&intentos=<?php echo $intentos ?>"><img src="camaleon/negro.png" alt=""></a></td>
                <td><a href="resultado.php?num=9&intentos=<?php echo $intentos ?>"><img src="camaleon/negro.png" alt=""></a></td>
            </tr>
        </table>
    </div>
    <h3>Llevas <?php echo $intentos ?> intentos</h3>
    <form action="resultado.php" method="post">
        <p>
            <label for="palabraIntroducida">Introduce la palabra
                <input type="text" name="palabraIntroducida">
            </label>

            <input type="hidden" name="intentos" id="intentos" value="<?php echo $intentos ?>">

        </p>
        <p>
            <input type="submit" value="Continuar">
        </p>
    </form>
</body>

</html>
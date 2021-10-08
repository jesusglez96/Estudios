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
            <?php
            $i = 1;

            while ($i <= 9) {
            ?>
                <tr>
                    <td><a href="resultado.php?num=<?php echo $i ?>"><img src="camaleon/negro.png" alt=""></a></td>
                    <td><a href="resultado.php?num=<?php echo ($i + 1) ?>"><img src="camaleon/negro.png" alt=""></a></td>
                    <td><a href="resultado.php?num=<?php echo ($i + 2) ?>"><img src="camaleon/negro.png" alt=""></a></td>
                </tr>
            <?php
                $i += 3;
            }
            ?>
        </table>
    </div>
    <form action="resultado.php" method="post">
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
<!DOCTYPE html>
<html lang="es">

<head>
    <?php
    // if (isset($_REQUEST['i'])) {
    //     echo "<meta http-equiv='refresh' content='2; url=index.php'>";
    // } Por si se quiere poner temporizador.
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
    <style>
        img {
            width: 75%;
            height: 75%;
        }
    </style>
</head>

<body>
    <table>
        <?php
        if (isset($_REQUEST["ojos"])) {
            $ojos = explode(" ", $_REQUEST["ojos"]);
            $act = $_REQUEST["act"];

            $ojos[$act] = ($ojos[$act] == 1) ? 0 : 1;
        } else {
            $ojos = array_fill(0, 100, 0);
        }

        $pos = 0;

        for ($i = 0; $i < 10; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 10; $j++) {
                $cadena = implode(" ", $ojos);
                if ($ojos[$pos] == 0) {
                    echo "<td><a href='index.php?act=$pos&ojos=$cadena'><img src='Ojo/perro.png'></a></td>";
                } else {
                    echo "<td><a href='index.php?act=$pos&ojos=$cadena'><img src='Ojo/perro2.png'></a></td>";
                }

                $pos++;
            }
            echo "</tr>";
        }
        ?>
    </table>

</body>

</html>
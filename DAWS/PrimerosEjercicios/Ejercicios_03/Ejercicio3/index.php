<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            background-image: url("camaleon.png");
            background-size: contain;
            border-collapse: collapse;
            border: none;
        }

        a {
            display: inline-block;
            padding: 15px;
        }

        td {
            border: 1px solid black;
        }

        img {
            width: 40em;
            height: 20em;
        }

        .apagado {
            background-color: grey;
        }

        .encendido {
            background-color: transparent;
        }

        input#abrir_imagen {
            border: none;
            background-color: transparent;
            color: transparent;
        }
    </style>
</head>

<body>
    <!-- Vamos a hacer el ejercicio de adivinar la imagen oculta del tema 3 más interesante. Para
    empezar, vamos a hacer el mosaico un poco más grande, de 10x10. Además la imagen no
    se va a dividir sino que formará parte del fondo de la tabla y para ocultar o mostrar cada
    parte del mosaico, el fondo de cada celda será transparente u opaco. Cada vez que se
    pulse un cuadrado, la parte de la imagen correspondiente a ese cuadrado se mostrará de
    manera definitiva, así que cada vez se irán mostrando más partes de la imagen. Por
    último, para rematar y hacerlo todavía más interesante, vamos a poner un límite en el
    número de cuadrados volteados, de modo que, si no se adivina la imagen antes de superar
    ese límite, se mostrará un mensaje indicando que ha perdido junto a la imagen completa.
    Si se acierta introduciendo el nombre correcto en la caja de texto antes de superar el
    límite, también se indicará con un mensaje junto a la imagen completa. Ayuda: La tabla
    con las partes visibles y no visibles de la imagen, se encuentra en una única página que se
    recarga con cada pulsación, pero el resultado del juego tanto si ha ganado como si ha
    perdido, se puede realizar en otra página distinta. Almacenar en un array la situación de
    cada celda (vista u oculta) y pasar el array con la función serialize para mayor comodidad. -->

    <?php
    $intentos = (isset($_REQUEST["intentos"])) ? $_REQUEST["intentos"] : 0;

    if ($intentos < 10) {
        $intentos++;
    ?>
        <div>
            <table>
                <?php
                if (isset($_REQUEST["cadNum"])) {
                    $cad = unserialize(base64_decode($_REQUEST["cadNum"]));

                    if (in_array($_REQUEST["act"], $cad)) {
                        array_splice($cad, array_search($_REQUEST["act"], $cad), 1);
                    } else {
                        array_push($cad, $_REQUEST["act"]);
                    }
                } else {
                    $cad = [];
                }

                $pos = 0;
                $cadNum = base64_encode(serialize($cad));

                for ($i = 0; $i < 10; $i++) {
                    echo "<tr>";
                    for ($j = 0; $j < 10; $j++) {

                        if (in_array($pos, $cad)) {
                            echo "<td class='encendido'>";
                        } else {
                            echo "<td class='apagado'>";
                        }

                ?>
                        <form action="index.php" method="get">
                            <input type="hidden" name="act" value="<?= $pos ?>">
                            <input type="hidden" name="cadNum" value="<?= $cadNum ?>">
                            <input type="hidden" name="intentos" value="<?= $intentos ?>">
                            <input type="submit" name="enviar" id="abrir_imagen">
                        </form>
                <?php
                        echo "</td>";
                        $pos++;
                    }
                    echo "</tr>";
                }
                ?>

            </table>
        </div>
        <form action="ganador.php" method="get">
            <p>
                <label for="palabraIntroducida">Introduce una palabra:
                    <input type="text" name="palabraIntroducida">
                </label>
            </p>
            <input type="hidden" name="cad" value="<?= $cadena ?>">
            <input type="hidden" name="act" value="-1">
            <input type="hidden" name="intentos" value="<?= $intentos ?>">
            <p>
                <input type="submit" name="enviar" id="enviar" value="Comprobar">
            </p>
        </form>
    <?php

    } else {
        $palabraSecreta = "camaleon";
    ?>
        <h1>Lo sentimos, has perdido. Has gastado los 10 intentos.</h1>
        <h2>La respuesta correcta era <?= $palabraSecreta ?></h2>
        <img src="camaleon.png">
    <?php
    }
    ?>
</body>

</html>
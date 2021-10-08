<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        tr,
        th,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th>Bloque</th>
            <th>Piso</th>
            <th>Llamar</th>
        </tr>
        <?php
        $bloque = 0;

        while ($bloque < 10) {
            echo "<tr><th rowspan=8>" . ($bloque + 1) . "</th></tr>";
            for ($i = 0; $i < 7; $i++) {
        ?>
                <tr>
                    <td>
                        <?php echo "Piso " . ($i + 1) ?>
                    </td>
                    <td>
                        <a href="
                        <?php echo "piso.php?bloque=" . $bloque . "&piso=" . $i ?>
                        ">Llamar</a>
                    </td>
                </tr>
        <?php

            }

            $bloque++;
        }
        ?>
    </table>

</body>

</html>
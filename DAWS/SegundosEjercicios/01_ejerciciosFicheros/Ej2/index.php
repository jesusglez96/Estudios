<?php
session_start();
if (!isset($_SESSION["mascotas"])) {
    $_SESSION["mascotas"] = [];
    $_SESSION["imprime"] = [];
}

function selectFecha()
{
    $docu = file("../Ej1/mascotas.txt");

    $fechas = [];
    foreach ($docu as $linea) {
        if (strpos($linea, "#") !== false) {
            $fechas[] = trim($linea);
        }
    }
    echo "<pre> existe la fecha o no ";
    var_dump($fechas);
    echo "</pre>";

    return $fechas;
}

if (isset($_POST["seleccion"])) {
    $_SESSION["mascotas"] = [];
    $_SESSION["imprime"] = [];

    $docu = file("../Ej1/mascotas.txt");

    $lineas = [];
    foreach ($docu as $numLinea => $linea) {
        if (trim($linea) == $_POST["seleccion"]) {
            $posIni = $numLinea;
        }
        $lineas[] = trim($linea);
    }
    $i = $posIni;
    $siguiente = true;
    while ($siguiente) {
        $i++;
        if ($i + 1 >= count($lineas) || str_contains($lineas[$i + 1], "#")) {
            $siguiente = false;
        }
        $_SESSION["mascotas"][] = $lineas[$i];
    }

    foreach ($_SESSION["mascotas"] as $key => $mascota) {
        $_SESSION["imprime"][] =  explode("-", $mascota);
    }
}

if (isset($_POST["borrar"])) {
    session_destroy();
    header("refresh:0;");
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            text-align: center;
            border-collapse: collapse;
        }

        tr {
            border-bottom: 1px solid black;
        }

        th,
        td {
            display: inline-block;
            width: 100px;
        }
    </style>
</head>

<body>
    <form action="#" method="post">
        <select name="seleccion">
            <?php
            $fechas = selectFecha();
            foreach ($fechas as $key => $fecha) {
                echo "<option value='$fecha'>$fecha</option>";
            }
            ?>
        </select>
        <input type="submit" value="Ver datos">
        <input type="submit" value="Eliminar datos" name="borrar">
    </form>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Edad</th>
        </tr>
        <?php
        foreach ($_SESSION["imprime"] as $key => $mascota) {
            echo "<tr>
                    <td>$mascota[0]</td>
                    <td>$mascota[1]</td>
                    <td>$mascota[2]</td>
                </tr>";
        }
        ?>
    </table>
</body>

</html>
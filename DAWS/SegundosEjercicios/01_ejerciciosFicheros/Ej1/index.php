<?php
session_start();
if (!isset($_SESSION["mascotas"])) {
    $_SESSION["mascotas"] = [];
}

function existeFecha()
{
    $fExiste = "#" . date("d/m/Y", time()) . "#" . PHP_EOL;
    echo "<pre> fExiste ";
    var_dump($fExiste);
    echo "</pre>";

    $docu = file("mascotas.txt");
    echo "<pre> docu ";
    var_dump($docu);
    echo "</pre>";

    $existe = in_array($fExiste, $docu);
    echo "<pre> existe la fecha o no ";
    var_dump($existe);
    echo "</pre>";

    return $existe;
}
if (isset($_POST["guardar"])) {
    $_SESSION["mascotas"][$_POST["name"]] = ["tipo" => $_POST["tipo"], "edad" => $_POST["edad"]];
}
if (isset($_POST["grabar"])) {
    $fop = fopen("mascotas.txt", "a");
    $f = date("d/m/Y", time());
    if (!existeFecha()) {
        fwrite($fop, "#" . $f . "#" . PHP_EOL);
    }
    foreach ($_SESSION["mascotas"] as $key => $value) {
        fwrite($fop, $key . "-" . $value['tipo'] . "-" . $value["edad"] . PHP_EOL);
    }
    $_SESSION["mascotas"] = [];
}

var_dump($_SESSION["mascotas"]);

if (isset($_POST["eliminar"])) {
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
</head>

<body>
    <form action="#" method="post">
        <input type="text" name="name" id="name">
        <input type="text" name="tipo" id="tipo">
        <input type="number" name="edad" id="edad">
        <input type="submit" name="guardar" value="guardar">
        <input type="submit" name="grabar" value="grabar">
        <input type="submit" name="eliminar" value="eliminar">
    </form>
    <table>
        <tr>
            <th>Mascotas</th>
        </tr>
        <?php
        if (count($_SESSION["mascotas"]) > 0) {
        ?>
            <tr>
                <td><?= "#" . date("d/m/Y", time()) . "#" ?></td>
            </tr>
        <?php
            foreach ($_SESSION["mascotas"] as $key => $value) {
                echo "<tr>
                    <td>" . $key . "-" . $value['tipo'] . "-" . $value['edad'] . "</td>
                </tr>";
            }
        }
        ?>
    </table>
</body>

</html>
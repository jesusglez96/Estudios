<?php
session_start();
if (!isset($_SESSION["mascotas"])) {
    $_SESSION["mascota"] = [];
}

function existeFecha()
{
    $fExiste = "#" . date("d/m/Y", time()) . "#" . PHP_EOL;
    echo "<pre>";
    var_dump($fExiste);
    echo "</pre>";
    $docu = file("mascotas.txt");
    return in_array($fExiste, $docu);
}

if (isset($_POST["guardar"])) {
    $fop = fopen("mascotas.txt", "a");
    if (!existeFecha()) {
        echo "<pre>";
        var_dump((existeFecha()));
        echo "</pre>";
        $f = date("d/m/Y", time());
        fwrite($fop, "#$f#" . PHP_EOL);
        $_SESSION["mascotas"][] = "#$f#";
    }

    fwrite($fop, $_POST["name"] . "-" . $_POST["tipo"] . "-" . $_POST["edad"] . PHP_EOL);
    $_SESSION["mascotas"][] = $_POST["name"] . "-" . $_POST["tipo"] . "-" . $_POST["edad"];
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
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Edad</th>
        </tr>

    </table>
</body>

</html>
<?php
try {
    $conexion = new PDO("mysql:host=localhost;dbname=ejercicios_9_4_1;charset=utf8", "root");
} catch (PDOException $e) {
    die("Error: " . $e->getMessage("Conexion fallida"));
}
$dni = $_POST["dni"];
var_dump($dni);
$nombres = $conexion->query("SELECT nombre FROM ejercicios_9_4_1.Clientes WHERE dni='$dni'");
while ($nombre = $nombres->fetchObject()) {
    var_dump($nombre);
}


if (isset($_POST["si"])) {
    echo "hola";
    $conexion->query("DELETE FROM ejercicios_9_4_1.Clientes WHERE dni='$dni'");
    header("Location: index.php");
}
if (isset($_POST["no"])) {
    header("Location: index.php");
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
    <h1>Seguro borrar?</h1>
    <form action="#" method="post">
        <label for="si">
            <input type="hidden" name="dni" value="<?= $dni ?>">
            <input type="submit" value="SI" name="si">
            <input type="submit" value="NO" name="no">
        </label>
    </form>
</body>

</html>
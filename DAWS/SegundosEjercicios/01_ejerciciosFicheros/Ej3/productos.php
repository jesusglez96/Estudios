<?php
if (isset($_REQUEST["back"])) {
    header("Location: index.php");
}
if (!isset($_REQUEST["back"]) && isset($_FILES["imagen"])) {
    $rutaOrigen = $_FILES["imagen"]["tmp_name"];
    $rutaDestino = "./img/" . $_FILES["imagen"]["name"];

    if (move_uploaded_file($rutaOrigen, $rutaDestino)) {
        echo "<h2>Movida con exito</h2>";
    }
    $nombre = $_REQUEST["nombre"];
    $precio = $_REQUEST["precio"];

    $fop = fopen("./catalogo.txt", "a");
    fwrite($fop, $nombre . "-" . $precio . "-" . $rutaDestino . PHP_EOL);
    fclose($fop);
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
        label {
            display: block;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <h1>Productos</h1>
    <form action="#" enctype="multipart/form-data" method="post">
        <label for="nombre">
            Nombre del producto: <input type="text" name="nombre">
        </label>
        <label for="precio">
            Precio: <input type="number" name="precio">
        </label>
        <label for="imagen">
            Imagen: <input type="file" name="imagen">
        </label>
        <input type="submit" value="Añadir producto">
        <input type="submit" value="Volver" name="back">
    </form>
</body>

</html>
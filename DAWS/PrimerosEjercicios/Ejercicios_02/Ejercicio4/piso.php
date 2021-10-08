<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piso</title>
</head>

<body>
    <?php
    $bloque = $_REQUEST["bloque"];
    $piso = $_REQUEST["piso"];

    echo "<h1>Has llamado al piso " . ($piso + 1) . " del bloque " . ($bloque + 1) . "</h1>"
    ?>


</body>

</html>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $data = ["teresa", "adrian", "alejandro", "angel", "cristobal", "ezequiel", "jesus", "jesus", "jesusmanuel", "joaquin", "jorge", "jose", "maria luisa", "ruben", "ruben"];
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    sort($data);
    var_dump($data);
    ?>
</body>

</html>
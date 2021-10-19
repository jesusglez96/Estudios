<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h2,
        h3{
            font-family: Arial;
        }
    </style>
</head>
<body>
    <?php 
    $cad = "Tengo una hormiguita en la patita, que me esta
    haciendo cosquillitas y no me puedo aguantar";

    echo "<h2>$cad</h2>";

    if (isset($_REQUEST["lt"])) {
        $cad2 = str_replace(["a", "e", "i", "o", "u"], $_REQUEST["lt"], $cad);
        echo "<h3>$cad2</h3>";
    }
    ?>
<form action="index.php" method="post">
    <label for="lt">Letra: 
        <input type="text" name="lt" id="lt">
    </label>
    <input type="submit" value="Cambiar">
</form>
</body>
</html>
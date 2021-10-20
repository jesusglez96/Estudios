<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h3{
            font: Arial;
        }
    </style>
</head>
<body>
    <?php 
    require_once("romano.php");

    if (isset($_REQUEST["txt"])) {
        $txt = strtoupper($_REQUEST["txt"]);
        Romano::calcularValor($txt);
    }

    ?>
    <form action="index.php" method="post">
        <label for="txt">Número romano: 
            <input type="text" name="txt" id="txt">
        </label>
        <button type="submit">A decimal</button>
    </form>
</body>
</html>
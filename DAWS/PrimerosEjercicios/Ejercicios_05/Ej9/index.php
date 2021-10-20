<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p{
            font: Arial;
        }
    </style>
</head>
<body>
    <?php 
    echo (isset($_REQUEST["txt"])) ? "<p>". strrev($_REQUEST["txt"]) . "</p>" : "<p>Introduce la frase</p>";
    ?>
    <form action="index.php" method="post">
        <label for="txt">Texto: 
            <input type="text" name="txt" id="txt">
        </label>
        <button type="submit">Comprbar</button>
    </form>
</body>
</html>
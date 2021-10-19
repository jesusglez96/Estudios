<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $frs = (isset($_REQUEST["txt"])) ? $_REQUEST["txt"] : "Aquí irá tu frase, esto es un ejemplo";    
    echo "<h2>$frs</h2>";
    
    echo "Esta frase tiene " . substr_count($frs, ".") . " párrafos.";

    ?>
    <form action="index.php" method="post">
        <label for="txt">Texto: 
            <input type="text" name="txt" id="txt">
        </label>
        <input type="submit" value="Contar">
    </form>
</body>
</html>
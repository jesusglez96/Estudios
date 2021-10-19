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
    $txt = (isset($_REQUEST["txt"])) ? $_REQUEST["txt"] : "Frase de prueba";
    echo "<h2>$txt</h2>";

    for ($i=0; $i < strlen($txt); $i++) { 
       $txt = str_pad($txt[strlen($txt)-1], strlen($txt), trim($txt, $txt[strlen($txt)-1]));

        echo $txt . "<br>";
    }
    ?>
<form action="index.php" method="post">
    <label for="txt">Texto: 
            <input type="text" name="txt" id="txt">
        </label>
        <input type="submit" value="Comprobar">
    </form>

</body>
</html>
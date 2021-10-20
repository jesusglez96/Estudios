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
    $txt = (isset($_REQUEST["txt"])) ? $_REQUEST["txt"] : "Frase de prueba.";
    $txt = trim($txt, ".");
    $arTxt = explode(".", $txt);
    
    echo $txt;
    foreach ($arTxt as $key => $value) {
        echo "<br>" . $value . "<br>Tiene " . str_word_count($value) . " palabras";
    }
    ?>
    <form action="index.php" method="post">
        <label for="txt">Texto: 
            <input type="text" name="txt" id="txt">
        </label>
        <input type="submit" value="Contar">
    </form>
</body>
</html>
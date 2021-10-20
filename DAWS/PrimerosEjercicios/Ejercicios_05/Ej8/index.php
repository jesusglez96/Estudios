<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p{
            font-family: Arial;
        }
    </style>
</head>
<body>
<?php 
if (isset($_REQUEST["txt"])) {
    $txt = $_REQUEST["txt"];
    echo "<p>$txt</p>";
    
    echo "<p>";
    $arAsci = [];
    for ($i=0; $i < strlen($txt); $i++) { 
        $arAsci[] = ord($txt[$i]);
        echo $arAsci[$i];
        // echo ord($txt[$i]);
    }
    echo "</p>";

    echo "<p>";
    for ($i=0; $i < count($arAsci); $i++) { 
        echo chr($arAsci[$i]);
    }
    echo "</p>";
}
?>

<form action="index.php" method="post">
    <label for="txt">Palabra: 
            <input type="text" name="txt" id="txt">
        </label>
        <button type="submit">Comprbar</button>
    </form>
</body>
</html>
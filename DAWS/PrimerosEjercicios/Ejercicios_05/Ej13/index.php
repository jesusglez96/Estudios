<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Escribir un programa que dado un texto que finaliza en punto, se pide: 
a. la posición inicial de la palabra más larga y su longitud
b. cuantas palabras con una longitud entre 8 y 16 caracteres poseen más de tres
veces la vocal “a”
Nota:
1.- Las palabras pueden estar separadas por uno o más espacios en blanco.
2.- Puede haber varios espacios en blanco antes de la primera palabra y también
después de la última.
3.- Se considera que una palabra finaliza cuando se encuentra un espacio en blanco o
un signo de puntuación. -->
<?php 
    $txt = (isset($_REQUEST["txt"])) ? $_REQUEST["txt"] : "Frase de prueba.";
    echo "<h1>$txt</h1>";
    $arTxt = preg_split("/[\s,.]+/", $txt);
    var_dump($arTxt);

    $arCount = [];

?>
<form>
    <label for="txt">
        <input type="text" name="txt" id="txt">
    </label>
    <button type="submit">Enviar</button>
</form>
</body>
</html>
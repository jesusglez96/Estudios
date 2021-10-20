<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $txt = (isset($_REQUEST["txt"])) ? $_REQUEST["txt"] : "Frase de prueba.";
    $count = ["blanco" => 0, "vocalA" => 0, "vocalE" => 0, "vocalI" => 0, "vocalO" => 0, "vocalU" => 0, "palabras10" => 0];
    $arTxt = preg_split("/ /", $txt);

    $count["blanco"] = substr_count($txt, " ");
    $count["vocalA"] += substr_count($txt, "a");  
    $count["vocalE"] += substr_count($txt, "e");  
    $count["vocalI"] += substr_count($txt, "i");  
    $count["vocalO"] += substr_count($txt, "o");  
    $count["vocalU"] += substr_count($txt, "u");  
    
    foreach ($arTxt as $key => $word) {

       if (mb_strlen($word) > 10) $count["palabras10"]++;
    }
    
    echo "<h1>Información de los datos introducidos.</h1>";
    echo "<h2>Frase: $txt</h2>";
    echo "<p>A. Hay " . $count["palabras10"] . " palabras con más de diez letras.</p>";
    echo "<p>B. <ul>
                    <li>A: " . $count["vocalA"] . "</li>
                    <li>E: " . $count["vocalE"] . "</li>
                    <li>I: " . $count["vocalI"] . "</li>
                    <li>O: " . $count["vocalO"] . "</li>
                    <li>U: " . $count["vocalU"] . "</li>
                </ul>
            </p>";
    echo "<p>C. Hay " . ($count["blanco"] * 100 / mb_strlen($txt)) . "% de espacios en blanco.</p>";

    ?>
    <form action="index.php" method="post">
        <label for="txt">Texto: 
            <input type="text" name="txt" id="txt">
        </label>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
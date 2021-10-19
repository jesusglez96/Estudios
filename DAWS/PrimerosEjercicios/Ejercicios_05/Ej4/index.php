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

      echo strpos($frs, " ");
      echo "<br>";
      echo substr($frs, 0, strpos($frs, " "));
      echo "<br>";
      if (str_ends_with("hola", $frs) === false) echo "hola";
      else "no";
      
      echo (str_ends_with("hola", $frs)) ? "hola" : "no";
      echo "<br>";
      echo str_ends_with(substr($frs, 0, strpos($frs, " ")) , $frs);
      echo "<br>";
      echo (str_ends_with(substr($frs, 0, strpos($frs, " ")) , $frs)) ? "Empieza y termina con la misma palabra" : "La primera y la ultima palabra no son inguales";
     
    ?>

    <form action="index.php" method="post">
    <label for="txt">Texto: 
            <input type="text" name="txt" id="txt">
        </label>
        <input type="submit" value="Comprobar">
    </form>
</body>
</html>
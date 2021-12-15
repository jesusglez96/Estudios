<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 T5</title>
</head>
<body>
    <?php 
        if(isset($_REQUEST['nombre'])){
            $nombre=$_REQUEST['nombre'];
            $nombre = strtolower($nombre);
            $intentos = $_REQUEST["intentos"];
            $intentosRes = 10-$intentos;
            if($nombre=="real madrid"){
                echo "<h1>Enhorabuena, has acertado la imagen en $intentosRes intentos.</h1> ";
                echo "<img src='10.png' height='500px' width='500px'>";
                echo "<h2>Pulsa <a href='ejercicio3-1.php'>AQUI</a> para volver a jugar.</h2>";
            }else{
                echo "<h2>No has acertado. Pulsa <a href='ejercicio3-1.php'>AQUI</a> para volver a intentarlo.</h2>";
            }
        }
    
    ?>
</body>
</html>
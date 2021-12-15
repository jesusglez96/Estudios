<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        if(isset($_REQUEST['num'])){;
            echo "<meta http-equiv='Refresh' content='2;url=ejercicio3.php'>";
        }
    ?>
</head>
<body>
<?php
    if(isset($_REQUEST['texto'])){
        $texto=$_REQUEST['texto'];
        $texto = strtolower($texto);
        if($texto=="real madrid"){
            echo "<h1>Enhorabuena, has acertado la imagen!!!</h1> ";
            echo "<img src='10.png'>";
        }else{
            echo "<h1>No has acertado. Sigue intentandolo.</h1>";
            echo "<a href='ejercicio1.html'>Volver</a>";
        }
    }

    if(isset($_REQUEST['num'])){

    $num=$_REQUEST['num'];

?>

    <h1>Adivina la imagen</h1>
    <table border=1 cellspacing=0 cellpadding=0>
            <?php
                $x = 1; 
                for ($i = 0; $i <3; $i++){
                    echo "<tr>";
                    for ($f = 0; $f<3; $f++){
            ?>
                        <td><img src="<?php echo($num==$x)?"$num.png":"oculto.png"?>"></td>
            <?php 
            
                    $x++;
                } 
                    
                    echo "</tr>";             
                    }
            ?>
    </table>
    <br>

    <form action="ejercicio1.php" method="post">
        Introduce nombre de la imagen: <input type="text" name="texto"><br><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
}
?>
    
</body>
</html>
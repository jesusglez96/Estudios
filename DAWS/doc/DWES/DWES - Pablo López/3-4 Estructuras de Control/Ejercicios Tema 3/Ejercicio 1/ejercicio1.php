<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        if(isset($_REQUEST['num'])){;
            echo "<meta http-equiv='Refresh' content='2;url=ejercicio1.html'>";
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
        <tr> 
            <td><img src="<?php echo($num==1)?"1.png":"oculto.png"?>"></td>
            <td><img src="<?php echo($num==2)?"2.png":"oculto.png"?>"></td>
            <td><img src="<?php echo($num==3)?"3.png":"oculto.png"?>"></td>
        </tr>
        <tr>
            <td><img src="<?php echo($num==4)?"4.png":"oculto.png"?>"></td>
            <td><img src="<?php echo($num==5)?"5.png":"oculto.png"?>"></td>
            <td><img src="<?php echo($num==6)?"6.png":"oculto.png"?>"></td>
        </tr>
        <tr>
            <td><img src="<?php echo($num==7)?"7.png":"oculto.png"?>"></td>
            <td><img src="<?php echo($num==8)?"8.png":"oculto.png"?>"></td>
            <td><img src="<?php echo($num==9)?"9.png":"oculto.png"?>"></td>
        </tr>
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
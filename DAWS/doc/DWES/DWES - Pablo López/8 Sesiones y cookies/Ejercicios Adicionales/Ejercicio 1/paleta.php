<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        session_start();
        if(isset($_SESSION["colores"])){
            ?>
            <table>
                    <?php 
                        for ($i = 0; $i<count($_SESSION["colores"]);$i++){
                            if($i==0 || $i%5==0){
                                ?>
                                <tr><td width="20px" height="20px" style="background-color: rgb(<?php echo $_SESSION["colores"][$i][0]?>,<?php echo $_SESSION["colores"][$i][1]?>,<?php echo $_SESSION["colores"][$i][2]?>)"></td>
                            <?php
                            } else {
                            ?>
                                <td width="20px" height="20px" style="background-color: rgb(<?php echo $_SESSION["colores"][$i][0]?>,<?php echo $_SESSION["colores"][$i][1]?>,<?php echo $_SESSION["colores"][$i][2]?>)"></td>
                            <?php
                            }
                        }
                    ?>
            </table>
    <?php
        }
    ?>
    <form action="ejercicio1.php">
        <br><input type="submit" value="Añadir mas colores">
    </form>
    <form action="ejercicio1.php" method="post">
        <br><input type="submit" value="Vaciar paleta de colores">
        <input type="hidden" name="vaciar">
    </form>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 T5</title>
</head>
<body>
    <style>
        table {
            background-image: url("10.png");
            background-size: contain;
            background-repeat: no-repeat;
        }
        
        #opaco {
            width: 50px;
            height: 50px;
            background-color: gray;
        }

        #transparente {
            width: 50px;
            height: 50px;
        }
    </style>
    <?php 
        if(isset($_REQUEST["fila"])){
            $fila = $_GET["fila"];
            $columna = $_GET["columna"];
            $mTexto = $_GET["mTexto"];
            $intentos = $_GET["intentos"];
        } else {
            $matriz = array_fill(0, 10, array_fill(0, 10, 0));
            $mTexto = base64_encode(serialize($matriz));
            $intentos = 10;
        }

        if(isset($_REQUEST["fila"])){
            $matriz = unserialize(base64_decode($mTexto));
            $matriz[$fila][$columna] = 1;
            $mTexto = base64_encode(serialize($matriz));
            $intentos--;
                if($intentos<0){
                    echo "<h2>Te has quedado sin intentos. Pulsa <a href='ejercicio3-1.php'>AQUI</a> para volver a intentarlo.</h2>";
                } else {
            
        ?> 
           <h2>Adivina la imagen</h2>
           <h3>Te quedan <?=$intentos?> intentos para adivinar la imagen</h3>
        <table border="1" cellspacing=0 cellpading=0 bordercolor="black">
        <?php 
            for ($i=0; $i<10; $i++){
                echo "<tr>";
                for ($j=0; $j<10; $j++){
                    if ($matriz[$i][$j]==1){
                        echo "<td id='transparente'><a href='ejercicio3-1.php?fila=$i&columna=$j&mTexto=$mTexto&intentos=$intentos'><div style='height:100%;width:100%'></div></a></td>";
                    } else {
                        echo "<td id='opaco'><a href='ejercicio3-1.php?fila=$i&columna=$j&mTexto=$mTexto&intentos=$intentos'><div style='height:100%;width:100%'></div></a></td>";
                    }
                }
                echo "</tr>";
            }   
        ?>
        </table>
            <form action="ejercicio3-2.php" method="get">
                <br>Introduce nombre de la imagen: <input type="text" name="nombre"><br><br>
                <input type="hidden" name="intentos" value="<?=$intentos?>">
                <input  type="submit" value="Enviar">
            </form>
        <?php } ?>

        
        <?php } else {?> 
            <h2>Adivina la imagen</h2>
            <h3>Tienes <?=$intentos?> intentos para adivinar la imagen</h3>
            <table border="1" cellspacing=0 cellpading=0 bordercolor="black">
                <?php 
                    for ($i=0; $i<10; $i++){
                        echo "<tr>";
                        for ($j=0; $j<10; $j++){
                            echo "<td id='opaco'><a href='ejercicio3-1.php?fila=$i&columna=$j&mTexto=$mTexto&intentos=$intentos'><div style='height:100%;width:100%'></div></a></td>";
                        }
                        echo "</tr>";
                    }
                ?>
            </table>
            <form action="ejercicio3-2.php" method="get">
                <br>Introduce nombre de la imagen: <input type="text" name="nombre"><br><br>
                <input type="hidden" value="<?=$intentos?>">
                <input  type="submit" value="Enviar">
            </form>
                <?php } ?>

            
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Adivina la imagen</h1>
    <table border=1 cellspacing=0 cellpadding=0>
    <?php
                $num = 1; 
                for ($i = 0; $i <3; $i++){
                    echo "<tr>";
                    for ($f = 0; $f<3; $f++){
                        echo "<td><a href='ejercicio3-2.php?num=$num'><img src='oculto.png'></a></td>";
                        $num++;
                    }
                    echo "</tr>";
                }
            ?>
    </table>
    <br>
    <form action="ejercicio3-2.php" method="post">
        Introduce el nombre de la imagen: <input type="text" name="texto"><br><br>
        <input type="submit" value="Enviar">
    </form>


</body>
</html>
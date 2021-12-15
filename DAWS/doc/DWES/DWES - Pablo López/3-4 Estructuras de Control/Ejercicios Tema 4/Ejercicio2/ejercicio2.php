<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1>Pulsa uno de los ojos para abrirlo</h1>
        <table border=1 cellspacing=0 cellpadding=0>
            <?php
                if(isset($_REQUEST["num"])){
                    $num = $_REQUEST["num"];
                } else {
                    $num = 0;
                }
                $aux = 1;
                for ($i = 0; $i <10; $i++){
                    echo "<tr>";
                    for ($f = 0; $f<10; $f++){
                        if ($aux==$num){
                        echo "<td><a href='ejercicio2.php?num=$aux'><img src='2.jpg' height='70px' width='100px'></a></td>";
                    } else {
                        echo "<td><a href='ejercicio2.php?num=$aux'><img src='1.jpg' height='70px' width='100px'></a></td>";
                    }
                    $aux++;
                    }
                    echo "</tr>";
                }
            ?>
        </table>
    
</body>
</html>
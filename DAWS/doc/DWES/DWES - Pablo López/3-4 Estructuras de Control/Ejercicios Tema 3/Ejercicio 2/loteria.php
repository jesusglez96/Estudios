<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
        $n1= rand(1,49);
        $n2= rand(1,49);
        $n3= rand(1,49);
        $n4= rand(1,49);
        $n5= rand(1,49);
        $n6= rand(1,49);
        $serie= rand(1,999);

        $cont = 0;
        $aux=false;
        $premiados = "Numeros premiados: ";

            if (isset($_REQUEST[$n1])){
                $cont++;
                $premiados."$n1, ";
            }
            
            if (isset($_REQUEST[$n2])){
                $cont++;
                $premiados= $premiados."$n2, ";
            }

            if (isset($_REQUEST[$n3])){
                $cont++;
                $premiados=$premiados."$n3, ";
            }

            if (isset($_REQUEST[$n4])){
                $cont++;
                $premiados=$premiados."$n4, ";
            }
            if (isset($_REQUEST[$n5])){
                $cont++;
                $premiados=$premiados."$n5, ";
            }
            if (isset($_REQUEST[$n6])){
                $cont++;
                $premiados=$premiados."$n6, ";
            }
            if (isset($_REQUEST[$serie])){
                $aux=true;
                $premiados=$premiados."$serie";
            }
        
    ?>

    <table border="1" style="border-collapse: collapse">
        <tr>
            <th align="left">COMBINACION GANADORA</th>
            <td><?php echo $n1," ", $n2, " ", $n3," ", $n4, " ", $n5, " ",$n6, " Serie: ", $serie ?></td>
        </tr>
    </table>

    <?php
            echo "<br>Aciertos: ", $cont;
            echo"<br>";
            echo "$premiados";
            echo"<br>";
            echo"<br>";
            switch($cont) {
                case 4:
                    if ($aux){
                        echo "Dinero vuelto + 500€ de la serie";
                    } else {
                        echo "Dinero vuelto";
                    }
                break;
                case 5:
                    if ($aux){
                        echo "30€ + 500€ de la serie";
                    } else {
                        echo "30€";
                    }
                break;
                case 6:
                    if ($aux){
                        echo "100€ + 500€ de la serie";
                    } else {
                        echo "100€";
                    }
                break;
                default: 
                    if ($aux){
                        echo "500€ de la serie";
                    } else {
                        echo "No premiado";
                    }
                break;
            }
 ?>


</body>
</html>
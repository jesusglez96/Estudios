<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Escribe un programa que lea 15 números por teclado y que los almacene en un array. Rota los
elementos de ese array, es decir, el elemento de la posición 0 debe pasar a la posición 1, el de la 1 a
la 2, etc. El número que se encuentra en la última posición debe pasar a la posición 0. Finalmente,
muestra el contenido del array.
-->
<?php 
        if(isset($_REQUEST["n"])){
            $n = $_GET["n"];
            $cont = $_GET["cont"];
            $nTexto = $_GET["nTexto"];
        } else {
            $cont = 0;
            $nTexto=" ";
            $n = 0 ;
        }

        if ($cont == 15){
            $nTexto = $nTexto . " " . $n;
            $nTexto = substr($nTexto, 4);
            $arrN =  explode(" ", $nTexto);
            
            echo "<h3>Array Original: </h3>";
            print_r($arrN);
            echo "<br>";


            $aux = $arrN[14];
            for ($i = 14; $i>0; $i--){
                $arrN[$i]=$arrN[$i-1];
            }
            $arrN[0]=$aux;
            echo "<h3>Array Rotado: </h3>";
            print_r($arrN);

            
        }



        

        if ($cont < 15) {
    ?>
            <form action="#" method="get">
                Introduce un número:
                <input type="number" name ="n" min="0" autofocus>
                <input type="hidden" name="cont" value="<?=++$cont?>">
                <input type="hidden" name="nTexto" value="<?= $nTexto . " " . $n ?>">
                <input type="submit" value="Enviar">
            </form>
            <?php  
                }
            ?>
</body>
</html>
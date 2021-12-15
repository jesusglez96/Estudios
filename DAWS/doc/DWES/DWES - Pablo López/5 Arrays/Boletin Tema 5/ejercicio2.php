<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Escribe un programa que pida 10 números por teclado y que luego muestre los números introducidos
junto con las palabras “máximo” y “mínimo” al lado del máximo y del mínimo respectivamente.-->

    <?php 
        if(isset($_REQUEST["n"])){
            $n = $_GET["n"];
            $cont = $_GET["cont"];
            $nTexto = $_GET["nTexto"];
        } else {
            $cont = 0;
            $nTexto="";
            $n = "" ;
        }

        if ($cont == 10){
            $nTexto = $nTexto . " " . $n;
            $nTexto = substr($nTexto, 2);
            $arrN =  explode(" ", $nTexto);

            $max = max($arrN);
            $min = min($arrN);

            echo "Los números introducidos son: <br>";
            foreach($arrN as $num){
                if ($num==$max){
                    echo $num, " Máximo<br>";
                } else if($num==$min){
                    echo $num, " Mínimo<br>";
                } else {
                    echo $num, "<br>";
                }
            }
            
        }

        if ($cont < 10) {
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
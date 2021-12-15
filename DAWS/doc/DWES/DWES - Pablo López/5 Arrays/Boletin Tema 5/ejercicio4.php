<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Escribe un programa que genere 100 números aleatorios del 0 al 20 y que los muestre por pantalla
separados por espacios. El programa pedirá entonces por teclado dos valores y a continuación
cambiará todas las ocurrencias del primer valor por el segundo en la lista generada anteriormente.
Los números que se han cambiado deben aparecer resaltados de un color diferente.-->

    <?php 

        
        if(isset($_REQUEST["n"])){
            $n = $_GET["n"];
            $n2 = $_GET["n2"];
            $nTexto = $_GET["nTexto"];
        } else {
            $arrNum = new SplFixedArray(100);
            $nTexto="";
            for ($i = 0; $i<count($arrNum); $i++){
                $arrNum[$i]=rand(0,20);
                $nTexto = $nTexto . "," . $arrNum[$i];
            }
            
        }

        if(isset($_GET["n"]) && isset($_GET["n2"])){           
            $arrNum2 = new SplFixedArray(100);
            $nTexto = substr($nTexto, 1);
            $arrNum =  explode(",", $nTexto);
            
            for ($i = 0; $i<count($arrNum2); $i++){
                if ($arrNum[$i]==$n){
                    $arrNum2[$i]=$n2;
                } else {
                    $arrNum2[$i]=$arrNum[$i];
                }
            }

            echo "<h3>Array Original</h3>";
            foreach($arrNum as $numero){
                echo $numero, ", ";
            }

            echo "<h3>Array Nuevo</h3>";
            foreach($arrNum2 as $numero2){
                if ($numero2 == $n2){
                    echo "<span style='color:red'>",$numero2, "</span>, ";
                }else {
                    echo $numero2, ", ";
                }

            }
        
         
        } else {

        echo "<h3>Array Original</h3>";
        foreach($arrNum as $numero){
            echo $numero, ", ";
        }

        ?>
        <br><br>
        <form action="#" method="get">
            Introduce el primer valor:
            <input type="number" name="n" min="0" max="20" autofocus required><br>
            Introduce el segundo valor:
            <input type="number" name="n2" min="0" required><br><br>
            <input type="hidden" name="nTexto" value="<?= $nTexto ?>">
            <input type="submit" value="Enviar">
        </form>

    <?php } ?>
    
</body>
</html>
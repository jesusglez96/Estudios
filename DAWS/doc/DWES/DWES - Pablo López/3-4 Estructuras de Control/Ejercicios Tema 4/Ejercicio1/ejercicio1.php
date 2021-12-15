<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Diseñar una página web que muestre una tabla con 3 columnas, la primera corresponde al
número de bloque, la segunda al piso y en la tercera hay un botón llamar. En total hay 10
bloques y cada bloque tiene 7 pisos. Cuando se pulse llamar en un piso de un bloque, mostrará
en otra página el mensaje del tipo “Usted ha llamado al piso 3 del bloque 6”. Utiliza
estructuras repetitivas para generar la tabla. -->

    
    <table border=1 cellspacing=0 cellpading=0 bordercolor="black">
        <tr>
            <td>Nº Bloque</td>
            <td>Nº Piso</td>
            <td>Botón</td>
        </tr>
        <?php  
            $bloque = 1;
            $piso = 1;
            for ($i = 0; $i<70; $i++){
                echo "<tr>";
                for ($f = 0; $f<3; $f++){
                    if ($f==0 && ($i==0 || $i==7 || $i==14 || $i==21 || $i==28 || $i==35 || $i==42 || $i==49 || $i==56 || $i==63)){
                        echo "<td rowspan='7'>Bloque $bloque</td>";
                        $bloque++;
                        $piso=1;
                    } 

                    if ($f==1){
                        echo "<td>Piso $piso</td>";
                        $piso++;
                    } else if ($f==2){
                        echo "<form action='ejercicio1-2.php' method='get'>";
                        echo "<input type='hidden' name='bloque' value=",$bloque-1,">";
                        echo "<input type='hidden' name='piso' value=",$piso-1,">";
                        echo "<td><input type='submit' value='Llamar'></td>";
                        echo "</form>";
                        
                    }
                    
                }
                echo "</tr>";
                
            } 
            
        
        ?>
            

    </table>

</body>
</html>
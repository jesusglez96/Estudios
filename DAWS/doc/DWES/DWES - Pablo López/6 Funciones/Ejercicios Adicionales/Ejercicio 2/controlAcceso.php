<?php 

$tarjetaAdmin = array(
    array("A"=>1, "B"=>2, "C"=>3, "D"=>4, "E"=>5),
    array("A"=>6, "B"=>7, "C"=>8, "D"=>9, "E"=>10),
    array("A"=>11, "B"=>12, "C"=>13, "D"=>14, "E"=>15),
    array("A"=>16, "B"=>17, "C"=>18, "D"=>19, "E"=>20),
    array("A"=>21, "B"=>22, "C"=>23, "D"=>24, "E"=>25)
);


    function dameTarjeta($perfil){
        if($perfil=="estandar"){
            $tarjetaEstandar = array(
                array("A"=>25, "B"=>24, "C"=>23, "D"=>22, "E"=>21),
                array("A"=>20, "B"=>19, "C"=>18, "D"=>17, "E"=>16),
                array("A"=>15, "B"=>14, "C"=>13, "D"=>12, "E"=>11),
                array("A"=>10, "B"=>9, "C"=>8, "D"=>7, "E"=>6),
                array("A"=>5, "B"=>4, "C"=>3, "D"=>2, "E"=>1)
            );

            return $tarjetaEstandar;
        }

        if($perfil=="admin"){
            $tarjetaAdmin = array(
                array("A"=>1, "B"=>2, "C"=>3, "D"=>4, "E"=>5),
                array("A"=>6, "B"=>7, "C"=>8, "D"=>9, "E"=>10),
                array("A"=>11, "B"=>12, "C"=>13, "D"=>14, "E"=>15),
                array("A"=>16, "B"=>17, "C"=>18, "D"=>19, "E"=>20),
                array("A"=>21, "B"=>22, "C"=>23, "D"=>24, "E"=>25)
            );

            return $tarjetaAdmin;
        }
    }

    function compruebaClave($matriz, $fila, $columna, $valor){
        $correcto = false;
        if ($matriz[$fila][$columna]==$valor){
            $correcto=true;
        } else {
            $correcto=false;
        }

        return $correcto;
    };

    function imprimeTarjeta($matrizTarjeta){?>
        <table border=1 cellspacing=0 cellpading=0 bordercolor="black">
            <tr>
                <th></th>
                <?php 
                    foreach($matrizTarjeta[0] as $indice => $valor){
                        echo "<th width='15px'>$indice</th>";
                    }
                ?>
            </tr>
            <?php
                $cont = 0;
                foreach($matrizTarjeta as $indice => $valor){
                    echo "<tr><th width='15px'>",$indice+1,"</th>";
                        foreach($matrizTarjeta[$cont] as $indice => $valor){
                            echo "<td>",$matrizTarjeta[$cont][$indice],"</td>";   
                        }
                    echo "</tr>";
                    $cont++;    
                }
            ?>
        </table>

    <?php } ?>    
    
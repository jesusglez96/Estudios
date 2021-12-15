<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 - T6 Funciones</title>
</head>
<body>
    <!-- Crear una página web para generar de manera aleatoria una combinación de apuesta en la
lotería primitiva. Se pedirán 6 números (entre 1 y 49) y el número de serie (entre 1 y 999). El
usuario podrá rellenar los números pedidos que desee, dejando en blanco el resto, de modo
que la combinación generada respete los números elegidos y genere aleatoriamente el resto
hasta completar la combinación (el número de serie también es opcional). El usuario también
podrá rellenar de manera opcional una caja de texto como título para su combinación.

Usar una función combinacion() que sea llamada para generar la combinación en función de
los parámetros recibidos y devuelva el array generado.

Usar una función imprimeApuesta() que reciba un array y un texto, e imprima en una tabla
html con el formato que quieras, el array generado con el texto de cabecera, para mostrar el
resultado de la combinación generada. Si la función no recibe ningún texto como cabecera
imprimirá "Combinación generada para la Primitiva".-->

    <?php 
        if(isset($_REQUEST["enviado"])){
            $numSeleccionados = new SplFixedArray(6);

            for ($i = 1; $i<=count($numSeleccionados); $i++){
                if (isset($_REQUEST["n".$i])){
                    $numSeleccionados[($i-1)] = $_GET["n".$i];
                } else {
                    $numSeleccionados[($i-1)] = "";
                }
            }

            function combinacion($arrNumeros){
                $combinacion = array();
                for ($i = 0; $i<count($arrNumeros); $i++){
                    if ($arrNumeros[$i]==""){
                        $combinacion[$i]=rand(1,49);
                    } else {
                        $combinacion[$i]=$arrNumeros[$i];
                    }
                }
                return $combinacion;
            }

            $combinacionFinal = combinacion($numSeleccionados);

            if($_REQUEST["nSerie"]!=""){
                array_push($combinacionFinal, $_GET["nSerie"]);
            } else {
                $nSerie = rand(1,999);
                array_push($combinacionFinal, $nSerie);
            }

            if($_REQUEST["titulo"]!=""){
                $titulo = $_GET["titulo"];
            } else {
                $titulo = "Combinación generada para la primitiva";
            }

            function imprimeApuesta($texto, $array) {?>
                <table border=1 cellspacing=0 cellpading=0 bordercolor="black">
                    <tr>
                        <th colspan="2"><?=$texto?></th>
                    </tr>
                    <tr>
                        <td>
                            <?php 
                                for($i = 0; $i<(count($array)-1); $i++){
                                    echo $array[$i], " ";
                                }
                            ?>
                        </td>
                        <td>Num. Serie: <?=end($array)?></td>
                    </tr>
                </table>
                
            <?php }
            
            imprimeApuesta($titulo, $combinacionFinal);
        
        } else {
    ?>

    <h1>Loteria Primitiva</h1>
    <h3>Introduzca su convinación para jugar</h3>

    <form action="ejercicio1.php" method="get">
        Introduce nombre de su combinación (opcional): <input type="text" name="titulo"><br><br>
        Introduce su combinación:<br>
        Num. 1: <input type="number" name="n1" min="1" max="49" width="30px">
        Num. 2: <input type="number" name="n2" min="1" max="49">
        Num. 3: <input type="number" name="n3" min="1" max="49">
        Num. 4: <input type="number" name="n4" min="1" max="49">
        Num. 5: <input type="number" name="n5" min="1" max="49">
        Num. 6: <input type="number" name="n6" min="1" max="49"><br>
        Num. Serie (opcional): <input type="number" name="nSerie" min="1" max="999">
        <br><br>
        <input type="hidden" name="enviado">
        <input type="submit" value="Enviar combinación">
    </form>
        <?php } ?>
</body>
</html>
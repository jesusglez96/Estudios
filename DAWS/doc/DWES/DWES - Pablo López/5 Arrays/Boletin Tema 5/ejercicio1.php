<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Define tres arrays de 20 números enteros cada una, con nombres “numero”, “cuadrado” y “cubo”.
Carga el array “numero” con valores aleatorios entre 0 y 100. En el array “cuadrado” se deben
almacenar los cuadrados de los valores que hay en el array “numero”. En el array “cubo” se deben
almacenar los cubos de los valores que hay en “numero”. A continuación, muestra el contenido de
los tres arrays dispuesto en tres columnas.
-->

    <?php 
        $numero = new SplFixedArray(20);
        $cuadrado = new SplFixedArray(20);
        $cubo = new SplFixedArray(20);

        for ($i = 0; $i<count($numero); $i++){
            $numero[$i] = rand(0,100);
        }

        for ($i = 0; $i<count($cuadrado); $i++){
            $cuadrado[$i] = $numero[$i]*$numero[$i];
        }

        for ($i = 0; $i<count($cubo); $i++){
            $cubo[$i] = $numero[$i]*$numero[$i]*$numero[$i];
        }

    ?>

        <table border="1">
            <tr>
                <td>Números</td><td>Cuadrado</td><td>Cubo</td>
            </tr>
            <tr>
                <td>
                    <?php 
                        foreach($numero as $n){
                            echo $n, "<br>";
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        foreach($cuadrado as $n){
                            echo $n, "<br>";
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        foreach($cubo as $n){
                            echo $n, "<br>";
                        }
                    ?>
                </td>
            </tr>
        </table>

        

    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClienteEj2</title>
</head>
<body>
<h1>Consulta los libros de la biblioteca</h1>
<form action="cliente.php" method="post">
    TITULO <input type="text" name="titulo">
    <input type="submit" name="porTitulo" value="CONSULTAR">
</form>
<form action="cliente.php" method="post">
    ESTADO <select name="estado">
                <option value=""></option>
                <option value="libre">LIBRE</option>
                <option value="alquilado">ALQUILADO</option>
            </select>
    <input type="submit" name="porEstado" value="CONSULTAR">
</form>
    <?php
    if (isset($_POST['titulo']) || isset($_POST['estado'])) {    
        if (isset($_POST['titulo'])) {
            $data = file_get_contents("http://localhost/Curso%2020-21/Ejercicios%20Adicionales/Examen%202/Ejercicio2/servicioLibros.php?titulo=".urlencode($_POST['titulo']));	
        }else if(isset($_POST['estado'])){
            $data = file_get_contents("http://localhost/Curso%2020-21/Ejercicios%20Adicionales/Examen%202/Ejercicio2/servicioLibros.php?estado=".$_POST['estado']);	
        }
        // echo $data;
        $resultado=json_decode($data);
        $codigo=$resultado[0]->codigo;
        if ($codigo==0) {
            
            $fichero='libros.csv';
            $librosFich=recuperarLibros($fichero);

            for ($i=1; $i<count($resultado);$i++) {
                if (array_key_exists($resultado[$i]->isbn,$librosFich)) {
                    $librosFich[$resultado[$i]->isbn][2]++;
                }else{
                    $librosFich[$resultado[$i]->isbn]=[$resultado[$i]->isbn, $resultado[$i]->titulo, 1];
                }
            }
            volcarLibros($librosFich, $fichero);
            $numLibros=count($resultado)-1;
            echo "<h3>$numLibros libros seleccionados</h3>";
            echo "<a href='libros.csv' target='_blank'><h3>Fichero generado</h3></a>";
        }else if ($codigo==1) {
            echo "<h3>La consulta no ha obtenido ningún resultado</h3>";
        }else if ($codigo==2) {
            echo "<h3>Debe indicar un estado de libro válido</h3>";
        }
    }

    function recuperarLibros($fichero){
        if (file_exists($fichero)) {
            $f = fopen($fichero, "r");
            while (($datosLibro = fgetcsv($f, 1000, ","))) {
                $librosFich[$datosLibro[0]]=[$datosLibro[0],$datosLibro[1],$datosLibro[2]];
            }
        }else{
            $librosFich=[];
        }
        return $librosFich;
    }
    function volcarLibros($librosFich, $fichero){
        $file = fopen($fichero, "w");
        foreach ($librosFich as $libro) {
            $cadena=implode(",",$libro);
            fwrite($file, $cadena . PHP_EOL);
        }
        fclose($file);
    }
    ?>
</body>
</html>
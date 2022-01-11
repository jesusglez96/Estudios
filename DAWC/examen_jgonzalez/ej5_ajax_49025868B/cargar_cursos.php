<?php
error_reporting(0);
// sleep(5);

// $user = "gonzalezj";
$user = "root";
// $password = "gOnzalezj9";
$db = "mysql:host=localhost;dbname=ajax_ciclos";
try {
    $conexion = new PDO($db, $user/*, $password*/);
} catch (PDOException $e) {
    die("Error: " . $e->getMessage("Conexion fallida"));
}


$sql = "SELECT id, nombre FROM ajax_ciclos.cursos;";
$resultado = $conexion->query($sql);
$arrResultado = $resultado->fetchAll();

$cursosXML = "<?xml version=\"1.0\"?>\n<cursos>\n";
for ($i = 0; $i < count($arrResultado); $i++) {
    $cursosXML .= "<curso>
                            <id>" . $arrResultado[$i]['id'] . "</id>\n
                            <nombre>" . $arrResultado[$i]['nombre'] . "</nombre>\n
                            </curso>\n";
}

$cursosXML .= "</cursos>\n";

header('Content-Type: text/xml');
echo $cursosXML;
$conexion = null;

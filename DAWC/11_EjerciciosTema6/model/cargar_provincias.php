<?php
error_reporting(0);
// sleep(5);

// $user = "gonzalezj";
$user = "root";
// $password = "gOnzalezj9";
$db = "mysql:host=localhost;dbname=gonzalezj_general";
try {
    $conexion = new PDO($db, $user/*, $password*/);
} catch (\Throwable $e) {
    die("Ni pajolera ");
}
$comunidad = $_REQUEST["comunidad"];
// $comunidad = 1;

$sql = "SELECT id, nombre FROM gonzalezj_general.provincias WHERE comunidad = $comunidad";
$resultado = $conexion->query($sql);
$arrResultado = $resultado->fetchAll();

$provinciasXML = "<?xml version=\"1.0\"?>\n<provincias>\n";
for ($i = 0; $i < count($arrResultado); $i++) {
    $provinciasXML .= "<provincia>
                            <id>" . $arrResultado[$i]['id'] . "</id>\n
                            <nombre>" . $arrResultado[$i]['nombre'] . "</nombre>\n
                            </provincia>\n";
}

$provinciasXML .= "</provincias>\n";

header('Content-Type: text/xml');
echo $provinciasXML;
$conexion = null;

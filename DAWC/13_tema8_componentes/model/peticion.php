<?php
error_reporting(0);
// sleep(5);

// $user = "gonzalezj";
$user = "root";
// $password = "gOnzalezj9";
$db = "mysql:host=localhost;dbname=gonzalezj_general";
try {
    $conexion = new PDO($db, $user);
    // $conexion = new PDO($db, $user, $password);
} catch (PDOException $e) {
    die("Ni pajolera ");
}

$sql = "SELECT nombre, nota FROM gonzalezj_general.ejercicio_tema8";
$resultado = $conexion->query($sql);

$arrResultado = $resultado->fetchAll(PDO::FETCH_KEY_PAIR);
header("Content-type: json", true);
echo json_encode($arrResultado);

$conexion = null;

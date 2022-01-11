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

$curso = $_REQUEST["curso"];

$sql = "SELECT nombre, horas_semanales FROM ajax_ciclos.asignaturas WHERE id_curso = $curso;";
$resultado = $conexion->query($sql);

$arrResultado = $resultado->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($arrResultado);

$conexion = null;

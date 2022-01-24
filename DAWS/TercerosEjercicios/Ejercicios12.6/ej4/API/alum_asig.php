<?php
require_once "./model/AlumnoAsignatura.php";
$mat = $_REQUEST["mat"];

$asignaturas = AlumnoAsignatura::getAsignaturasByAlu($mat);
$response = [];

foreach ($asignaturas as $asignatura) {
    $response[] = ["codigo" => $asignatura->getCodigo(), "nombre" => $asignatura->getNombre()];
}
header("Content-type: json");
echo json_encode($response);

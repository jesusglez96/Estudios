<?php
require "./model/Alumno.php";
$grupo = $_REQUEST["grup"];

$alumnos = Alumno::getAlumnosByCurso($grupo);
$response = [];
// echo "<pre>";
// var_dump($alumnos);
// echo "</pre>";
foreach ($alumnos as $alumno) {
    $response[] = ["matricula" => $alumno->getMatricula(), "nombre" => $alumno->getNombre(), $alumno->getApellidos(), $alumno->getCurso()];
}
header("Content-type: json");
echo json_encode($response);

<?php
require "./model/Alumno.php";
$matricula = $_REQUEST["mat"];
$codigo = $_REQUEST["cod"];

$matriculacion = new AlumnoAsignatura($matricula, $codigo);
$matriculacion->insert();

<?php
include "./Model/Alumno.php";
$mat = $_REQUEST['mat'];
$alumno = Alumno::getAlumnoById($mat);
$newAlumno = new Alumno($mat, $alumno->getNombre(), $alumno->getApellidos(), $_REQUEST['grup']);
$newAlumno->update();

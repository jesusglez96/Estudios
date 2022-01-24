<?php
include "../Model/Alumno.php";
include "../Model/AlumnoAsignatura.php";
$alumno = new Alumno($_POST['mat']);
$matriculacion = new AlumnoAsignatura($_POST['mat'], 0);
$matriculacion->deleteAlumno();
$alumno->delete();

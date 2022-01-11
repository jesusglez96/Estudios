<?php
require_once "./../Model/Incidencia.php";
$id = $_REQUEST["id"];
$incidencia = Incidencia::getIncidenciaById($id);

$incidencia->delete();
header("Location: principal.php");

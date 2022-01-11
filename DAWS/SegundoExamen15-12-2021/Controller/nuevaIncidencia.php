<?php
require_once "./../Model/Incidencia.php";
$descripcion = $_REQUEST["descripcion"];
$date = date("Y-m-d");
$estado = "PENDIENTE";

$incidencia = new Incidencia(0, $descripcion, $date, $estado);

$incidencia->insert();

header("Location: principal.php");

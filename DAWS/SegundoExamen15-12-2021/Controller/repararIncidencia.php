<?php
require_once "./../Model/Incidencia.php";
$id = $_REQUEST["id"];
$incidencia = Incidencia::getIncidenciaById($id);

$incidencia->setestado("REPARADO");
$incidencia -> update();
header("Location: principal.php");

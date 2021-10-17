<?php 
include "funciones.php";
$nums = $_REQUEST["numeros"];
$serie = $_REQUEST["serie"];
$txt = $_REQUEST["txt"];

$nums = combinacion($nums);

if (empty($serie)) {
    $serie = rand(1, 999);
}

imprimeApuesta($nums, $serie, $txt);

?>

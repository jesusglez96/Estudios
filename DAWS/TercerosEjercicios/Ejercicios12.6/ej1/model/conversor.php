<?php

const CAMBIO = 166.3860;

$moneda = $_REQUEST["moneda"];
$dinero = $_REQUEST["dinero"];

if ($moneda == "eu") echo json_encode($dinero / CAMBIO);
elseif ($moneda == "ps") echo json_encode($dinero * CAMBIO);
else echo 0;

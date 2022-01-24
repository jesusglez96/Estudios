<?php
session_start();
include "./../model/diet.php";

$food = str_replace(" ", "%20", $_POST["food"]);

$_SESSION["analisis"] = diet($food);

header("Location: ./index.php");

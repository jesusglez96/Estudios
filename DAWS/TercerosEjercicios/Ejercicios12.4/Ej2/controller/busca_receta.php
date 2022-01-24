<?php
session_start();
include "./../model/recipe.php";
// $food = $_POST["food"];
// echo "<pre>";
// var_dump($food);
// echo "</pre>";

$food = str_replace(" ", "%20", $_POST["food"]);

$_SESSION["recetas"] = recipe($food);
// echo "<pre>";
// var_dump($_SESSION["recetas"]);
// echo "</pre>";
header("Location: ./index.php");

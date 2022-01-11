<?php
session_start();
require_once "./../Model/Incidencia.php";

if (!isset($_SESSION['usuario'])) {
    $_SESSION["usuario"] = ["nombre" => "", "permiso" => ""];
    if (isset($_COOKIE["usuario"])) {
        $_SESSION["usuario"] = unserialize($_COOKIE["usuario"]);
    } else {
        header("Location: index.php");
    }
}

if ($_SESSION['usuario']["permiso"] == "admin") {
    $data["incidencias"] = Incidencia::getincidencia();
    include_once "../View/admin.php";
} else {
    $data["incidencias"] = Incidencia::getIncidenciasPendientes();
    include_once '../View/user.php';
}

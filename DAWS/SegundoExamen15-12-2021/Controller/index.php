<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    if (isset($_COOKIE["usuario"])) {
        $_SESSION["usuario"] = unserialize($_COOKIE["usuario"]);
        header("Location: principal.php");
    }
}
include_once "../View/acces.php";

<?php
session_start();

require_once "./../model/Producto.php";

$data["productos"] = Producto::getProductos();

if (!isset($_SESSION['productos'])) {
    $_SESSION['productos'] = [];
    $_SESSION['total'] = 0;
    $_SESSION['cantidad'] - 0;
    if (isset($_COOKIE["productos"])) {
        $_SESSION['productos'] = unserialize($_COOKIE["productos"]);
        $_SESSION['total'] = $_COOKIE["total"];
        $_SESSION['cantidad'] = $_COOKIE["cantidad"];
    } else {
        setcookie("cantidad", 0, time() + 60 * 60 * 24 * 30);
        setcookie("total", 0, time() + 60 * 60 * 24 * 30);
        setcookie("productos", $_SESSION['productos'], time() + 60 * 60 * 24 * 30);
    }
}

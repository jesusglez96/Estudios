<?php
session_start();
if (isset($_POST["enlace"])) {
    $_SESSION["pagina"] = $_POST["enlace"];
    include "./../view/" . $_SESSION["pagina"] . ".php";
} else {
    if (isset($_SESSION["pagina"]))
        include "./../view/" . $_SESSION["pagina"] . ".php";
    else
        include
            "./../view/recetas.php";
}

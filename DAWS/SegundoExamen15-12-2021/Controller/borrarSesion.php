<?php
session_start();
session_destroy();
setcookie("usuario", 0, -1);
header("Location: ./index.php");

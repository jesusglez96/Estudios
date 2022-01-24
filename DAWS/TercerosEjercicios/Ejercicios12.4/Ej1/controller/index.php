<?php
if (isset($_REQUEST['select']))
    $ciudad = $_REQUEST['select'];
else
    $ciudad = "wuhan";

include "./../model/tiempo.php";

$tiempo = tiempo($ciudad);

include "./../view/index.php";

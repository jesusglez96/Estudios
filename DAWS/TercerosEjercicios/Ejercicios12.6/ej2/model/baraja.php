<?php
$baraja = ["basto", "espada", "copa", "oro"];
// $palo = "";
// for ($i = 0; $i < 4; $i++) {
//     switch ($i) {
//         case 0:
//             $palo = "basto";
//             break;
//         case 1:
//             $palo = "espada";
//             break;
//         case 2:
//             $palo = "copa";
//             break;
//         case 3:
//             $palo = "oro";
//             break;
//         default:
//     }

//     for ($j = 1; $j <= 12; $j++) {
//         $baraja[$palo][] = $j;
//     }
// }
// echo "<pre>";
// var_dump($baraja);
// echo "</pre>";

switch (rand(0, 3)) {
    case 0:
        $palo = "basto";
        break;
    case 1:
        $palo = "espada";
        break;
    case 2:
        $palo = "copa";
        break;
    case 3:
        $palo = "oro";
        break;
    default:
}

$cantidad = $_REQUEST["cantidad"];
// echo "<pre>";
// var_dump($baraja);
// echo "</pre>";
$response = [$palo => []];
// echo "<pre>";
// var_dump($baraja);
// echo "</pre>";
if ($cantidad > 1 && $cantidad < 40) {
    for ($i = 0; $i < $cantidad; $i++) {
        do {
            $figura = rand(1, 12);
            switch ($figura) {
                case 1:
                    $figura = "AS";
                    break;
                case 10:
                    $figura = "SOTA";
                    break;
                case 11:
                    $figura = "CABALLO";
                    break;
                case 12:
                    $figura = "REY";
                    break;
                default:
            }
        } while (in_array($figura, $response[$palo]));
        $response[$palo][] = $figura;
    }
    // echo "<pre>";
    // var_dump($response);
    // echo "</pre>";
    header("Content-type: json");
    echo json_encode($response);
} else echo 0;

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bocateria Juani</title>
    <style>
        form,
        h1,
        p {
            text-transform: capitalize;
        }
    </style>
</head>

<body>
    <!-- Realizar una página web para realizar pedidos de comida rápida. Tenemos tres tipos de
    comida: Pizza: jamon, atun, bacon, peperoni Hamburguesa: lechuga, tomate, queso
    Perrito caliente: lechuga, cebolla, patata A traves de tres formularios distintos, uno para
    cada tipo de comida se va añadiendo comida al pedido con sus respectivos ingredientes,
    hasta que se pulse el botón finalizar pedido (en otro formulario), con lo que se mostrará
    el pedido completo en una tabla, con toda la comida y las opciones de cada una. Usar las
    función serialize() y unserialize() para pasar arrays como cadenas Nota: con arrays de 2
    dimensiones la serialización se corrompe, así que hay que usar la función en combinación
    con otra de la siguiente forma: $cadenaTexto=base64_encode(serialize($array));
    $array=unserialize(base64_decode($cadenaTexto)); -->

    <h1>Bocateria juani</h1>
    <hr>
    <?php
    if (isset($_REQUEST["fin"])) {
    ?>
        <h2>Tu pedido:</h2>
        <hr>
        <?php
        $pedido = unserialize(base64_decode($_REQUEST["pedido"]));

        foreach ($pedido as $comida => $comidaPersonalizada) {
            foreach ($comidaPersonalizada as $key => $listaOpciones) {
                echo "<p>$comida con ";
                foreach ($listaOpciones as $pos => $opcion) {
                    echo "$opcion, ";
                }
                echo "</p>";
            }
        }
    } else {
        if (isset($_REQUEST["pedido"])) {
            $pedido = unserialize(base64_decode($_REQUEST["pedido"]));
        } else {
            $pedido = ["pizzas" => [], "hamburguesas" => [], "perritos" => []];
        }

        $fin = false;

        if (isset($_REQUEST["carrito"])) {
            echo '<pre>';
            echo "array pizzas";
            var_dump($_REQUEST["carrito"]);
            echo '</pre>';

            switch ($_REQUEST["carrito"]) {
                case 'pizza':
                    array_push($pedido["pizzas"], $_REQUEST["carritos"]);
                    break;
                case 'hamburguesa':
                    array_push($pedido["hamburguesas"], $_REQUEST["carritos"]);
                    break;
                case 'perrito':
                    array_push($pedido["perritos"], $_REQUEST["carritos"]);
                    break;
                default:
                    echo "<span>mal mal mal</span>";
                    break;
            }
        }

        $pedidoCad = base64_encode(serialize($pedido));

        ?>


        <h2>Pizzas</h2>
        <form action="index.php" method="get">
            <input type="hidden" name="carrito" id="carrito" value="pizza">
            <label for="jamon"><input type="checkbox" name="carritos[]" id="jamon" value="jamon">Jamon</label><br>
            <label for="bacon"><input type="checkbox" name="carritos[]" id="bacon" value="bacon">bacon</label><br>
            <label for="atun"><input type="checkbox" name="carritos[]" id="atun" value="atun">atun</label><br>
            <label for="peperoni"><input type="checkbox" name="carritos[]" id="peperoni" value="peperoni">peperoni</label><br>
            <label for="pedido"><input type="hidden" name="pedido" id="pedido" value="<?= $pedidoCad ?>"></label>
            <p><input type="submit" value="Añadir al pedido"></p>
        </form>


        <hr>
        <h2>Hamburguesas</h2>
        <form action="index.php" method="get">
            <input type="hidden" name="carrito" id="carrito" value="hamburguesa">
            <label for="lechugah"><input type="checkbox" name="carritos[]" id="lechugah" value="lechugah">lechuga</label><br>
            <label for="tomateh"><input type="checkbox" name="carritos[]" id="tomateh" value="tomateh">tomate</label><br>
            <label for="quesoh"><input type="checkbox" name="carritos[]" id="quesoh" value="quesoh">queso</label><br>
            <label for="pedido"><input type="hidden" name="pedido" id="pedido" value="<?= $pedidoCad ?>"></label>
            <p><input type="submit" value="Añadir al pedido"></p>
        </form>


        <hr>
        <h2>Perritos</h2>
        <form action="index.php" method="get">
            <input type="hidden" name="carrito" id="carrito" value="perrito">
            <label for="lechugap"><input type="checkbox" name="carritos[]" id="lechugap" value="lechugap">lechuga</label><br>
            <label for="tomatep"><input type="checkbox" name="carritos[]" id="tomatep" value="tomatep">tomate</label><br>
            <label for="quesop"><input type="checkbox" name="carritos[]" id="quesop" value="quesop">queso</label><br>
            <label for="pedido"><input type="hidden" name="pedido" id="pedido" value="<?= $pedidoCad ?>"></label>
            <p><input type="submit" value="Añadir al pedido"></p>
        </form>

        <hr>

        <form action="index.php" method="get">
            <label for="pedido"><input type="hidden" name="pedido" id="pedido" value="<?= $pedidoCad ?>"></label>
            <label for="fin"><input type="hidden" name="fin" id="fin" value="<?= true ?>"></label>
            <p><input type="submit" value="Hacer Pedido"></p>
        </form>
    <?php } ?>
</body>

</html>
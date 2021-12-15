<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  
    if(isset($_REQUEST["fin"])) {
        echo "<h1>Resumen del pedido</h1>";
        $pedido=unserialize(base64_decode($_REQUEST["pedido"]));
        foreach ($pedido as $comida){
            echo $comida[0]." con: ";
            for ($i =1; $i<count($comida);$i++){
                echo $comida[$i].", ";
            }
            echo "<br>";
        }
        echo "<hr></hr>";
    } else {
        if (!isset($_REQUEST["comida"])){
            $pedido = [];
        } else {
            $pedido = unserialize(base64_decode($_REQUEST["pedido"]));
            array_push($pedido, $_REQUEST["comida"]);
            
        }
    ?>
    
    <form action="ejercicio2.php" method="POST">
        PIZZA<br>
        <input type="hidden" name="pedido" value="<?=base64_encode(serialize($pedido))?>">
        <input type="hidden" name="comida[]" value="pizza">
        <input type="checkbox" name="comida[]" value="jamon">Jamon<br>
        <input type="checkbox" name="comida[]" value="atun">Atún<br>
        <input type="checkbox" name="comida[]" value="bacon">Bacon<br>
        <input type="checkbox" name="comida[]" value="peperoni">Peperoni<br>
        <input type="submit" value="Añadir al pedido">
    </form>
    <hr>
    <form action="ejercicio2.php" method="post">
        HAMBURGUESA<br>
        <input type="hidden" name="pedido" value="<?=base64_encode(serialize($pedido))?>">
        <input type="hidden" name="comida[]" value="hamburguesa">
        <input type="checkbox" name="comida[]" value="lechuga">Lechuga<br>
        <input type="checkbox" name="comida[]" value="tomate">Tomate<br>
        <input type="checkbox" name="comida[]" value="queso">Queso<br>
        <input type="submit" value="Añadir al pedido">
    </form>
    <hr>
    <form action="ejercicio2.php" method="POST">
        PERRITO CALIENTE<br>
        <input type="hidden" name="pedido" value="<?=base64_encode(serialize($pedido))?>">
        <input type="hidden" name="comida[]" value="perrito">
        <input type="checkbox" name="comida[]" value="lechuga">Lechuga<br>
        <input type="checkbox" name="comida[]" value="cebolla">Cebolla<br>
        <input type="checkbox" name="comida[]" value="patata">Patata<br>
        <input type="submit" value="Añadir al pedido">
    </form>
    <hr>
    <form action="ejercicio2.php" method="POST">
        <input type="hidden" name="pedido" value="<?=base64_encode(serialize($pedido))?>">
        <input type="hidden" name="fin">
        <input type="submit" value="Finalizar pedido">
    </form>
    <?php } ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
        include_once "Bicicleta.php";
        include_once "Coche.php";

        $monti = new Bicicleta("20");

        $fordKa = new Coche(100);

        $fordKa->recorre(30);
        $monti->recorre(10);

        echo $monti->hacerCaballito()."<br";
        echo $fordKa->quemarRueda()."<br>";
        
        echo "Mi bici ha recorrido ".$monti->getKmRecorridos()." Km<br>";
		echo "Mi coche ha recorrido ".$fordKa->getKmRecorridos()." Km<br>";
		echo "Se han creado un total de ".Vehiculo::getVehiculosCreados()." vehículos<br>";
		echo "Todos los vehículos han hecho un total de ".Vehiculo::getKmTotales()." Km<br>";

    ?>
</body>
</html>
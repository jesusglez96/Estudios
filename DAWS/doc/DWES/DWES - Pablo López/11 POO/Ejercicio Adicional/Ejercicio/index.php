<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, td, tr {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <?php 
        include_once "CocheLujo.php";

        if(!isset($_SESSION["coches"])) {
            $_SESSION["coches"]=[];
        }
        if(isset($_POST["matricula"])) {
            if($_POST["lujo"]=="") {
                $coche = new Coche($_POST["matricula"],$_POST["modelo"],$_POST["precio"]);
            } else {
                $coche = new CocheLujo($_POST["matricula"],$_POST["modelo"],$_POST["precio"],$_POST["lujo"]);
            }
            $_SESSION["coches"][]=serialize($coche);
        }
    ?>

        <form action="" method="post">
            Matricula: <input type="text" name="matricula">
            Modelo: <input type="text" name="modelo">
            Precio: <input type="number" name="precio">
            Suplemento lujo: <input type="number" name="lujo">
            <input type="submit" value="Añadir">
        </form>
        <br>
        <?php 
            echo "<u>Coche mas caro:</u><br>".Coche::masCaro();
        ?>
        <br><br>
        <table>
            <tr><td>Matricula</td><td>Modelo</td><td>Precio</td><td>(Suplemento lujo)</td></tr>

        <?php 
            foreach($_SESSION["coches"] as $coche) {
                $coche=unserialize($coche);
                echo "<tr>".$coche;
                if (get_class($coche)=="Coche") {
                    echo "<td>No procede</td>";
                }
                echo "</tr>";
            }
        ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Moneda original: 
        <select name="moneda">
            <option value="eur">Euro</option>
            <option value="pes">Peseta</option>
        </select><br>

        Inserte cantidad: <input type="number" name="cantidad">
        <input type="submit">
    </form>
    <hr>
    <?php 
        if (isset($_POST["cantidad"])) {
            $json = file_get_contents("http://localhost/DWES%20-%20Pablo%20L%C3%B3pez/13%20Servicios/Ejercicios%20Boletin/Ejercicio%203/servidor.php?cantidad=$_POST[cantidad]&moneda=$_POST[moneda]");
            $conversion = json_decode($json);
            echo "Son $conversion->resultado $conversion->moneda";
        }
    ?>
</body>
</html>
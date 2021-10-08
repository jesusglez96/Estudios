<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loteria</title>
    <style>
        tr,
        th,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <?php
    $bingo1 = rand(0, 99);
    $bingo2 = rand(0, 99);
    $bingo3 = rand(0, 99);
    $bingo4 = rand(0, 99);
    $bingo5 = rand(0, 99);
    $bingo6 = rand(0, 99);
    $bingoSerie = rand(0, 999);

    $numeros = $_POST['num'];
    $serie = intval($_POST["serie"]);

    $aciertos = 0;
    $aciertoSerie = false;

    foreach ($numeros as $key => $value) {
        if ($value == $bingo1 || $value == $bingo2 || $value == $bingo2 || $value == $bingo3 || $value == $bingo4 || $value == $bingo5 || $value == $bingo6) {
            $aciertos++;
        }
    }
    $aciertoSerie = ($serie == $bingoSerie) ? true : false;

    if ($aciertos < 4) {
        $dinero = 0;
    } elseif ($aciertos == 4) {
        $dinero = 30;
    } else {
        $dinero = 100;
    }
    if ($aciertoSerie) $dinero += 500;

    ?>

    <table>
        <tr>
            <th>N1</th>
            <th>N2</th>
            <th>N3</th>
            <th>N4</th>
            <th>N5</th>
            <th>N6</th>
            <th>Serie</th>
        </tr>
        <tr>
            <td><?php echo $bingo1 ?></td>
            <td><?php echo $bingo2 ?></td>
            <td><?php echo $bingo3 ?></td>
            <td><?php echo $bingo4 ?></td>
            <td><?php echo $bingo5 ?></td>
            <td><?php echo $bingo6 ?></td>
            <td><?php echo $bingoSerie ?></td>
        </tr>
    </table>

    <?php
    echo "<p>
            Has tenido $aciertos aciertos.<br>
            Has ganado $dinero euros        
        </p>";
    ?>

</body>

</html>
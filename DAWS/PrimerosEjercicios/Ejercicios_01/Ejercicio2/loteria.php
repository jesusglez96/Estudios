<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loteria</title>
    <style>
        .up {
            background: linear-gradient(to right, lightgreen, aliceblue);
            padding: 10px;
        }

        img {
            width: 100%;
        }

        .tabla {
            margin: 0 auto;
            border-collapse: collapse;
            text-align: center;
        }

        tr,
        td,
        th {
            border: 1px solid black;
            padding: 3px;
        }
    </style>
</head>

<body>
    <div class="up">
        <table class="tabla">
            <tr>
                <th></th>
                <th>N1</th>
                <th>N2</th>
                <th>N3</th>
                <th>N4</th>
                <th>N5</th>
                <th>N6</th>
                <th>Serie</th>
            </tr>
            <tr>
                <th>Tu número</th>

                <?php
                $numero = array(
                    $_POST["numero1"], $_POST["numero2"], $_POST["numero3"],
                    $_POST["numero4"], $_POST["numero5"], $_POST["numero6"]
                );

                for ($i = 0; $i < sizeof($numero); $i++) {
                    echo "<td>$numero[$i]</td>";
                }

                ?>
                <td>
                    <?php
                    echo $_POST["serie"];
                    ?>
                </td>
            </tr>
            <tr>
                <th>Número ganador</th>
                <?php
                $ganador = array_fill(0, 6, 0);

                for ($i = 0; $i < sizeof($ganador); $i++) {
                    $ganador[$i] = rand(0, 49);
                }

                foreach ($ganador as $key => $value) {
                    echo "<td>$value</td>";
                }
                ?>

                <td>
                    <?php
                    echo rand(0, 999);
                    ?>
                </td>
            </tr>
        </table>
    </div>
    <div>
        <img src="https://imagenes.elpais.com/resizer/-jSPowDOVaNRT2idXijvBlAM-kg=/1200x0/cloudfront-eu-central-1.images.arcpublishing.com/prisa/JVPALZVZ2RBMRMNE4NHBUZY4NA.jpg">
    </div>
</body>

</html>
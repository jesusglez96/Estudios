<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            display: inline-block;
        }

        table,
        tr,
        th,
        td{
            border: 1px solid black;
        }
        label{
            display: block;
        }
    </style>
</head>
<body>
    <?php 
    include "funciones.php";
    $posRand = posAleatoria();
    $sctPos = [];

    $posiciones = ["A", "B", "C", "D", "E"];
    ?>
    <table>
        <tr>
            <th>Administrador</th>
        </tr>
        <tr>
            <th></th>
            <?php 
            for ($i=0; $i < 5; $i++) { 
                echo "<th>$posiciones[$i]</th>";
            }
            ?>
        </tr>
        <?php 
        for ($i=0; $i < 5; $i++) { 
            echo "<tr>";
            echo "<th>" . $i + 1 . "</th>";
            for ($j=0; $j < 5; $j++) { 
                echo "<td>" . $posiciones[$j] . $i + 1 . "</td>";
                if ($i == $posRand["fl"] && $posiciones[$j] == $posRand["lt"]) {
                    $sctPos["adminPos"] = $posiciones[$j] . $i;
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
    <table>
        <tr>
            <th>Usuario estándar</th>
        </tr>
        <tr>
            <th></th>
            <?php 
            for ($i=0; $i < 5; $i++) { 
                echo "<th>$posiciones[$i]</th>";
            }
            ?>
        </tr>
        <?php 
        for ($i=0; $i < 5; $i++) { 
            echo "<tr>";
            echo "<th>" . $i + 1 . "</th>";
            for ($j=0; $j < 5; $j++) { 
                echo "<td>" . $i + 1 . $posiciones[$j] .  "</td>";
                if ($i == $posRand["fl"] && $posiciones[$j] == $posRand["lt"]) {
                    $sctPos["userPos"] = $i . $posiciones[$j];
                }
            }
            echo "</tr>";
        }

        $serSctPos = base64_encode(serialize($sctPos));
        ?>
    </table>
    <form action="pasword.php" method="post">
        
        <label for="who">Selecciona el tipo de usuario: 
        <select name="who" id="who">
            <option value="admin">Administrador</option>
            <option value="user">Usuario estándar</option>
        </select>
        </label>
        <input type="hidden" name="secret" id="secret" value="<?=$serSctPos?>">
        <label for="pwd">Introduce la fila <?= $posRand["fl"] ?> y la columna <?= $posRand["lt"] ?>
            <input type="text" name="pwd" id="pwd">
        </label>
        <input type="submit" value="Comprobar">
    </form>
</body>
</html>
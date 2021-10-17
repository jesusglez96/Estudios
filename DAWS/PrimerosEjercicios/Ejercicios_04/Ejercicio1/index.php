<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            text-align: left;
        }

        div#numeros {
            box-shadow: 20px 2px 20px 10px lightsalmon;
            width: fit-content;
            text-align: center;
        }

        div#numeros label {
            margin: 1em;
            display: inline-block;
        }

        div#serie {
            box-shadow: 8px 2px 20px blue;
            width: 10em;
            display: block;
            margin: 1em;
            text-align: center;
        }

        div#serie input {
            margin: 1em;
        }

        div#txt {
            box-shadow: 8px 2px 20px chocolate;
            width: 20em;
            display: block;
            margin: 1em;
            text-align: center;
        }

        div#txt input {
            margin: 1em;
        }

        div#send {
            width: 10em;
            margin: 1em;
            text-align: center;
            display: block;
        }

        div#send input {
            box-shadow: 2px 2px 20px 0 green;
        }

        div#send input:hover {
            box-shadow: 6px 6px 60px 10px darkgreen;
        }
    </style>
</head>
<body>
    <form action="loteria.php" method="post">
        <div id="numeros">
            <?php
            for ($i = 0; $i < 6; $i++) {
            ?>
                <label for="num<?= $i ?>">Número <?= $i + 1 ?>:
                    <input type='number' name='numeros[]' id="num<?= $i ?>" min=1 max=49>
                </label>
            <?php
            }
            ?>
        </div>

        <div id="serie">
            <label for="serie">Serie:
                <input type="number" name="serie" min=1 max="999">
            </label>
        </div>
        <div id="txt">
            <label for="txt">Texto:
                <input type="text" name="txt">
            </label>
        </div>
        <div id="send">
            <input type="submit" value="Comprobar">
        </div>

    </form>

</body>

</html>
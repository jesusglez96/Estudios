<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p{
            font: Arial;
        }
    </style>
</head>
<body>
    <?php 
    if (isset($_REQUEST["name"])) {
        echo "<p>" . $_REQUEST["name"] . "</p>";
        $txt = explode(" ", $_REQUEST["name"]);

        $acro = "";
        foreach ($txt as $key => $value) {
            $acro .= strtoupper($value[0]);
        }
        $txt = implode(" ", $txt);

        echo "<p>" . ucwords($txt, " ") . "</p>";
        echo "<p>$acro</p>";
    }
    ?>
    <form action="index.php" method="post">
        <label for="name">
            <input type="text" name="name" id="name">
        </label>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
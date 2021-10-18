<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            text-align: center;
            border: 1px solid black;
            background-image: linear-gradient(to bottom right, orange, white, green);
            height: 20em;
            box-shadow: 20px 20px 20px 10px grey;
        }
    </style>
</head>
<body>
    <?php 
    if (isset($_REQUEST["txt"])) {
        $txt = $_REQUEST["txt"];
        for ($i=0; $i < strlen($txt); $i++) { 
            echo $txt[$i] . "<br>";
        }
    }
    ?>
    <form action="index.php" method="post">
        <label for="txt">Texto: 
            <input type="text" name="txt" id="txt">
        </label>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
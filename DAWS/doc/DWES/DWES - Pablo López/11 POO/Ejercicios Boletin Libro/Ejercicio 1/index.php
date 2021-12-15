<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        include_once "ave.php";
        include_once "canario.php";
        include_once "perro.php";

        $tano = new Perro("macho","");
        echo $tano->andar()."<br>";
        echo $tano->darPata()."<br>";
        echo $tano->amamantar()."<br>";
        echo $tano->cuidarCrias()."<br>";

        $kiki = new Canario("hembra", "gris");
        echo $kiki->cantar()."<br>";
        echo $kiki->piar()."<br>";
        echo $kiki->acicalar()."<br>";
        echo $kiki->volar()."<br>";
    ?>
</body>
</html>
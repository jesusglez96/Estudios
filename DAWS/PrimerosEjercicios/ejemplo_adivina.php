<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
</head>

<body>
    <?php
    if (!isset($_REQUEST['numeroIntroducido'])) {
        $oportunidades = 5;
        $numeroIntroducido = 555;
        $numeroSecreto = rand(1, 100);
    } else {
        $oportunidades = $_POST['oportunidades'];
        $numeroIntroducido = $_POST['numeroIntroducido'];
        $numeroSecreto = $_POST['numeroSecreto'];
    }
    if ($numeroIntroducido == $numeroSecreto) {
        echo "Enhorabuena, has acertado el número.";
    } else {
        if ($oportunidades == 0) {
            echo "Lo siento, has agotado todas tus oportunidades. Has perdido";
        } else {
            if ($numeroIntroducido != 555) {
                if ($numeroSecreto > $numeroIntroducido)
                    echo "El número que estoy pensando es mayor que el introducido.<br>";
                else
                    echo "El número que estoy pensando es menor que el introducido.<br>";
            }
    ?>
            <form action="ejemplo_adivina.php" method="post">
                <input type="text" name="numeroIntroducido">
                <input type="hidden" name="oportunidades" value="<?= $oportunidades ?>">
                <input type="hidden" name="numeroSecreto" value="<?= $numeroSecreto ?>">
                <input type="submit" value="Continuar">
            </form>
    <?php
        }
    }
    ?>
</body>

</html>
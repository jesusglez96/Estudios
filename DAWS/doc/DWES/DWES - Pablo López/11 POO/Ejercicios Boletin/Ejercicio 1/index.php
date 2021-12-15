<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  
        include_once 'empleado.php';
        $empleado1 = new Empleado('Curro',3420);
        $empleado1->pagaImpuesto();
        $empleado1->asigna("Pedro", 2430);
        $empleado1->pagaImpuesto();
    ?>
</body>
</html>
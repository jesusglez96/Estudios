<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Escribe un programa que muestre por pantalla 10 palabras en inglés junto a su correspondiente
traducción al castellano. Las palabras deben estar distribuidas en dos columnas. Utiliza la etiqueta
<table> de HTML-->
    
    <table border=1>
        <tr>
            <th><?php echo "Inglés" ?></th>
            <th><?php echo "Español"?></th>
        </tr>
        <tr>
            <td><?php echo "Dog"?></td>
            <td><?php echo "Perro"?></td>
        </tr>
        <tr>
            <td><?php echo "Cat"?></td>
            <td><?php echo "Gato"?></td>
        </tr>
        <tr>
            <td><?php echo "Summer"?></td>
            <td><?php echo "Verano"?></td>
        </tr>
    </table>
    
</body>
</html>
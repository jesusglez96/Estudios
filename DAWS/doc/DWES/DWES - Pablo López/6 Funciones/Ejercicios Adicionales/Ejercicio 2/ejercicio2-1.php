<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 - T6 Funciones</title>
</head>
<body>
    <h1>Control de Acceso</h1>
    <form action="ejercicio2-2.php" method="get">
        Indica perfil de usuario:<br>
        <input type="radio" name="usuario" value="admin" required>Admin<br>
        <input type="radio" name="usuario" value="estandar" required>Estandar<br><br>
        Introduce clave:<br>
        Fila(1-5): <input type="number" name="fila" min="1" max="5" required><br>
        Columna(A-E): <input type="text" name="columna" pattern="[A-Ea-e]{1}" required><br>
        Valor: <input type="number" name="valor" required><br><br>
        <input type="submit" value="Enviar">
    </form>
<br><br>
    <?php 
        include "controlAcceso.php";
        
        echo "<div style='float: left;margin-right: 50px'><h3>Tarjeta admin</h3>";
        imprimeTarjeta(dameTarjeta("admin"));
        echo "</div>";

        echo "<h3>Tarjeta estandar</h3>";
        imprimeTarjeta(dameTarjeta("estandar"));
    
    ?>
</body>
</html>
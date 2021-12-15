<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $pesetas = $_GET['pesetas'];
        
        echo $pesetas," pesetas son ", ($pesetas/166), " euros";
        
        ?> 
</body>
</html>
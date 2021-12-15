<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $euros = $_GET['euros'];
        
        echo $euros,"€ son ", ($euros*166), " pesetas";
        
        ?> 
</body>
</html>
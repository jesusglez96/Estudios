<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        tr,
        td{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <table>
        <?php 
            $words = array("good" => "bueno", "bad" => "malo", "low" => "bajo", "high" => "alto", "short" => "bajito",
                            "tall" => "altito", "long" => "largo", "sad" => "triste", "happy" => "feliz", "sick" => "enfermo");
            foreach ($words as $key => $value) {
                echo "<tr>
                        <td>{$key}</td>
                        <td>{$value}</td>
                    </tr>";
            }
        ?>
    </table>
</body>
</html>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>

<body style="text-align: center;">
    <?php
    if (!isset($_REQUEST['personas'])) {
        header('location:Ejercicio4.php');
    }
    
    if (isset($_REQUEST['orientacion'])) {
        $orient= $_REQUEST['orientacion'];
        $personas = substr($_REQUEST['personas'], 1);
        echo  $personas."<br>";
        $personas = explode('-',$personas);
        //No es posible con foreach porque necesitamos modificar el contenido del array
        // foreach ($personas as $person) { 
        //     $person=explode(',',$person);
        // }
        for ($i=0; $i < count($personas); $i++) { 
            $personas[$i]=explode(',',$personas[$i]);
        }
        do { //obtenemos una persona aleatoria de la orientación recibida
            $persona1 = $personas[rand(0, count($personas)-1)];
        } while ($persona1[2]!=$orient); 
        switch ($orient) {
         case 'het':
             do { //obtenemos persona mientras sea del mismo sexo o sea homo (puede ser bis)
                 $persona2 = $personas[rand(0, count($personas)-1)];
             } while ($persona2[2]=='hom' || $persona2[1]==$persona1[1]); 
             break;
         case 'hom':
             do { //obtenemos persona mientras sea la misma o no sea homo o no sean del mismo sexo
                 $persona2 = $personas[rand(0, count($personas)-1)];
             } while ($persona2==$persona1 || $persona2[2]=='het' || $persona2[1]!=$persona1[1]);
             break;
         case 'bis':
             do { //obtenemos persona mientras sea la misma o sea hetero del mismo sexo o sea homo de sexo distinto
                 $persona2 = $personas[rand(0, count($personas)-1)];
             } while ($persona2==$persona1 || ($persona2[2]=='het' && $persona2[1]==$persona1[1]) || ($persona2[2]=='hom' && $persona2[1]!=$persona1[1]));
        }
        echo "<h1>La pareja afortunada está formada por ".$persona1[0]." y ".$persona2[0]."</h1>";
    }
    ?>
    <div style="width: 800px; margin:auto; ">
    <h4>ELIGE EL TIPO DE PAREJA ALEATORIA QUE QUIERES FORMAR</h4>
    <table style="width: 500px; margin:auto;"><tr>
    <td>
        <form action="">
            <input type="hidden" name="personas" value=<?=$_REQUEST['personas']?>>
            <input type="hidden" name="orientacion" value="het">
            <input type="submit" value="HETEROSEXUAL">
        </form>    
    </td>
    <td>
        <form action="">
            <input type="hidden" name="personas" value=<?=$_REQUEST['personas']?>>
            <input type="hidden" name="orientacion" value="hom">
            <input type="submit" value="HOMOSEXUAL">
        </form>    
    </td>
    <td>
        <form action="">
            <input type="hidden" name="personas" value=<?=$_REQUEST['personas']?>>
            <input type="hidden" name="orientacion" value="bis">
            <input type="submit" value="BISEXUAL">
        </form>    
    </td>
    </tr></table>
    <?php
      
    ?>
    </div>
</body>
</html>
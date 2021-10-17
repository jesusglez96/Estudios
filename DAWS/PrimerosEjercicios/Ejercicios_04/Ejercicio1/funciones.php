<?php 
function combinacion($arr)
{
    for ($i=0; $i < 6; $i++) { 
        if(empty($arr[$i])) $arr[$i] = rand(1, 49);
    }
    return $arr;
}

function imprimeApuesta($nums, $serie, $txt)
{
?>
   <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Document</title>
       <style>
           body{
               text-align: center;
           }

           h1{
               color: burlywood;
           }
           
           table{
               display: inline-block;
               background-image: linear-gradient(to right, #3f87a6, #ebf8e1, #f69d3c);
               box-shadow: 2px 20px 20px 2px lightgreen;
           }

           table, 
           tr,
           th,
           td{
               padding: 2px;
               border: 1px solid grey;
           }

       </style>
   </head>
   <body>
       <h1><?php echo (empty($txt))? "Combinación generada para la primitiva" : $txt ?></h1>
       <table>
           <tr>
                <?php 
                for ($i=0; $i < 6; $i++) { 
                    echo "<th>N" . ($i+1) . "</th>";
                }
                ?>
                <th>Serie</th>
           </tr>
           <tr>
           <?php 
                for ($i=0; $i < count($nums); $i++) { 
                    echo "<td>$nums[$i]</td>";
                }
                ?>
                <td>
                    <?= $serie ?>
                </td>
           </tr>
       </table>
   </body>
   </html>
<?php
}

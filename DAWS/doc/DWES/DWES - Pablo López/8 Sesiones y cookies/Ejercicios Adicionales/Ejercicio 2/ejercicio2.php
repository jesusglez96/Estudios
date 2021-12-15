<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>¿Crees que el estado de alarma terminará el 13 de abril?</h2>
    <?php 
    
        session_start();

        /*if(isset($_REQUEST["limpiar"])){
            session_destroy();
            header("location:ejercicio2.php");
        }*/

        if(isset($_COOKIE["votosSi"])){
            $_SESSION["votosSi"] = $_COOKIE["votosSi"];
        } else {
            $_SESSION["votosSi"] = 0;
        }
        
        if(isset($_COOKIE["votosNo"])){
            $_SESSION["votosNo"] = $_COOKIE["votosNo"];
        } else {
            $_SESSION["votosNo"] = 0;
        }

        /*if(!isset($_SESSION["votosSi"]) && !isset($_SESSION["votosNo"]) ){
            $_SESSION["votosSi"] = 0;
            $_SESSION["votosNo"] = 0;
        }^*/

        if(isset($_REQUEST["si"]) || isset($_REQUEST["no"]) ){
            if(isset($_REQUEST["si"])){
                $_SESSION["votosSi"]++;
                setcookie("votosSi", $_SESSION["votosSi"], time() + 3*24*3600);
                ?>
                    <table>
                        <tr>
                            <td><h3>SI</h3></td>
                            <?php 
                                for ($i=0; $i<$_SESSION["votosSi"]; $i++){?>
                                <td><img src="1.png" height="20px" width="20px"></td>
                                <?php
                                }
                            ?>
                        </tr>
                        <tr>
                            <td><h3>NO</h3></td>
                            <?php 
                                for ($i=0; $i<$_SESSION["votosNo"]; $i++){?>
                                <td><img src="2.png" height="20px" width="20px"></td>
                                <?php
                                }
                            ?>
                        </tr>
                    </table>
                <?php 
            }   
            
            if(isset($_REQUEST["no"])){
                $_SESSION["votosNo"]++;
                setcookie("votosNo", $_SESSION["votosNo"], time() + 3*24*3600);
                ?>
                    <table>
                        <tr>
                            <td><h3>SI</h3></td>
                            <?php 
                                for ($i=0; $i<$_SESSION["votosSi"]; $i++){?>
                                <td><img src="1.png" height="20px" width="20px"></td>
                                <?php
                                }
                            ?>
                        </tr>
                        <tr>
                            <td><h3>NO</h3></td>
                            <?php 
                                for ($i=0; $i<$_SESSION["votosNo"]; $i++){?>
                                <td><img src="2.png" height="20px" width="20px"></td>
                                <?php
                                }
                            ?>
                        </tr>
                    </table>
            <?php    
            } 
        
        } else {
            echo "<table><tr><td><h3>SI</h3></td></tr><tr><td><h3>NO</h3></td></tr></table>";
        }
    ?>

    <table>
        <tr>
            <td>
                <form action="#" method="post">
                    <input type="submit" value="SI">
                    <input type="hidden" name="si">
                </form>
            </td>
            <td>
                <form action="#" method="post">
                    <input type="submit" value="NO">
                    <input type="hidden" name="no">
                </form>
            </td>
            <!--<td>
                <form action="#" method="post">
                    <input type="submit" value="Limpiar escuesta">
                    <input type="hidden" name="limpiar">
                </form>
            </td>-->
        </tr>
    </table>
</body>
</html>
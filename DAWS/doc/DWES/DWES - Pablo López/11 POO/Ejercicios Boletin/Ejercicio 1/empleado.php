<!-- Confeccionar una clase Empleado con los atributos nombre y sueldo.
Definir un método “asigna” que reciba como dato el nombre y sueldo y actualice los atributos.
Plantear un segundo método que imprima el nombre y un mensaje si debe o no pagar
impuestos (si el sueldo supera a 3000 paga impuestos).
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        class Empleado {
            private $nombre;
            private $sueldo;

            public function __construct($nombre, $sueldo){
                $this->nombre = $nombre;
                $this->sueldo = $sueldo;
            }


            public function getNombre()
            {
                return $this->nombre;
            }
            public function setNombre($nombre)
            {
                $this->nombre = $nombre;
                return $this;
            }

            public function getSueldo()
            {
                        return $this->sueldo;
            }
            public function setSueldo($sueldo)
            {
                        $this->sueldo = $sueldo;

                        return $this;
            }

            public function asigna($nombre, $sueldo){
                $this->setNombre($nombre);
                $this->setSueldo($sueldo);
            }

            public function pagaImpuesto(){
                if ($this->sueldo>3000) {
                    echo $this->nombre." debe pagar impuestos.<br>";
                } else {
                    echo $this->nombre." NO debe pagar impuestos.<br>";
                    
                }
            }

        }
    
    ?>
</body>
</html>
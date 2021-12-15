<!-- Crear una clase cubo que contenga información sobre la capacidad y su contenido actual en
litros. Se podrá consultar tanto la capacidad como el contenido en cualquier momento. Dotar a
la clase de la capacidad de verter el contenido de un cubo en otro (hay que tener en cuenta si
el contenido del cubo origen cabe en el cubo destino, si no cabe, se verterá solo el contenido
que quepa). Hacer una página principal para probar el funcionamiento con un par de cubos-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        class Cubo {
            private $capacidad;
            private $contenido;

            public function __construct($capacidad, $contenido){
                $this->capacidad = $capacidad;
                $this->contenido = $contenido;
            }

            public function getCapacidad()
            {
                return $this->capacidad;
            }
            public function setCapacidad($capacidad)
            {
                $this->capacidad = $capacidad;

                return $this;
            }

            public function getContenido()
            {
                return $this->contenido;
            }

            public function setContenido($contenido)
            {
                $this->contenido = $contenido;

                return $this;
            }

            public function consultaCapacidad(){
                return $this->capacidad;
            }

            public function consultaContenido(){
                return $this->getContenido();
            }

            public function llenarCubo($cubo2){
                $cubo2->contenido = ($this->contenido + $cubo2->contenido);
                if ($cubo2->contenido > $cubo2->capacidad){
                    $sobrante = $cubo2->contenido - $cubo2->capacidad;
                    $cubo2->contenido = $cubo2->capacidad;
                    $this->contenido = $sobrante;
                } else {
                    $this->contenido = 0;
                }
            }
        }
    ?>
</body>
</html>
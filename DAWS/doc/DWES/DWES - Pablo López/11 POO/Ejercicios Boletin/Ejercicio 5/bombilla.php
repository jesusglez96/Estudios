<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        class Bombilla {
            private $estado;
            private $potenciaConsumida;
            private $ubicacion;

            public function __construct($estado, $potenciaConsumida, $ubicacion){
                $this->$estado = $estado;
                $this->$potencia = $potencia;
                $this->$ubicacion = $ubicacion;
            }

            
            public function getEstado()
            {
                        return $this->estado;
            }

            public function setEstado($estado)
            {
                        $this->estado = $estado;

                        return $this;
            }


            public function getPotenciaConsumida()
            {
                        return $this->potenciaConsumida;
            }
 
            public function setPotenciaConsumida($potenciaConsumida)
            {
                        $this->potenciaConsumida = $potenciaConsumida;

                        return $this;
            }
 
            public function getUbicacion()
            {
                        return $this->ubicacion;
            }

            public function setUbicacion($ubicacion)
            {
                        $this->ubicacion = $ubicacion;

                        return $this;
            }

            public function estadoBombilla(){
                return $this->getEstado();
            }
        }
    ?>
</body>
</html>
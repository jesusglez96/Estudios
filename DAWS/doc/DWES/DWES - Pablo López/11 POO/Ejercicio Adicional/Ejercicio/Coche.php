<!-- Diseñar una clase Coche con los atributos matricula, modelo y precio. La clase debe tener los atributos
de clase modeloCaro y precioCaro, que contendrá en todo momento el modelo del coche más caro y
su precio. Los métodos a incluir son:
• constructor con todos los atributos
• getters y setters
• toString (devuelve los datos en columnas de fila de tabla:
“<td>matricula</td><td>modelo…”).
• Incluir un método de clase “masCaro” que devuelva un String con el modelo y el precio del
coche más caro.-->

<?php 

    session_start();
        if(!isset($_SESSION["modeloCaro"])) {
            $_SESSION["modeloCaro"] = "Ninguno";
            $_SESSION["precioCaro"] = 0;
        }

    class Coche {
        private $matricula;
        private $modelo;
        private $precio;

        public static function getModeloCaro()
        {
            return Coche::$modeloCaro;
        }

        public static function getPrecioCaro()
        {
            return Coche::$precioCaro;
        }

        public function __construct($matricula, $modelo, $precio){
            $this->matricula = $matricula;
            $this->modelo = $modelo;
            $this->precio = $precio;
            if ($precio>$_SESSION["precioCaro"]) {
                $_SESSION["modeloCaro"] = $modelo;
                $_SESSION["precioCaro"] = $precio;
            }
        }

        public function getMatricula()
        {
                return $this->matricula;
        }

        public function setMatricula($matricula)
        {
                $this->matricula = $matricula;

                return $this;
        }

        public function getModelo()
        {
                return $this->modelo;
        }

        public function setModelo($modelo)
        {
                $this->modelo = $modelo;

                return $this;
        }

        public function getPrecio()
        {
                return $this->precio;
        }

        public function setPrecio($precio)
        {
            $this->precio = $precio;
            if($precio>$_SESSION["precioCaro"]) {
                $_SESSION["modeloCaro"]=$this->modelo;
                $_SESSION["precioCaro"]=$precio;
            }
        }

        public function __toString() {
            return "<td>".$this->matricula."</td><td>".$this->modelo."</td><td>".$this->precio."</td>";
        }

        public static function masCaro() {
            return "Modelo: ". $_SESSION["modeloCaro"]. "<br>Precio: ". $_SESSION["precioCaro"];
        }
    }

?>
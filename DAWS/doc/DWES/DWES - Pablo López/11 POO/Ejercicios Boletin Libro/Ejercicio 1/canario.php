<?php 
    include_once "ave.php";

    class Canario extends Ave {
        private $color;

        public function __construct($sexo, $color) {
            parent::__construct($sexo);
            if (isset($color)) {
                $this->color = $color;
            } else {
                $this->color = "gris";
            }
        }

        public function __toString() {
            return parent::__toString()."<br>Color: $this->color";
        }

        public function cantar() {
            return "piao piao ki piao pi";
        }

        public function piar() {
            return "Pipipipi";
        }



    }
?>
<?php 

    include_once "Vehiculo.php";

    class Coche extends Vehiculo {
        private $caballos;

        public function __construct($caballos){
            parent::__construct();
            $this->caballos = $caballos;
        }

        public function quemarRueda() {
            return "*Quemando rueda*";
        }
    }

?>
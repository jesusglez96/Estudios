<?php 

    class Vehiculo {
        private static $kmTotales = 0;
        private static $vehiculosCreados = 0;

        private $kmRecorridos;
        
        
        public static function getVehiculosCreados()
        {
            return Vehiculo::$vehiculosCreados;
        }

        public static function getKmTotales()
        {
            return Vehiculo::$kmTotales;
        }

        public function __construct() {
            Vehiculo::$vehiculosCreados++;
            $this->kmRecorridos = 0;
        }

     
        public function getKmRecorridos()
        {
            return $this->kmRecorridos;
        }

        public function recorre($km) {
            $this->getKmRecorridos += $km;
            Vehiculo::$kmTotales += $km;
        }
    }

?>
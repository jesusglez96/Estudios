<?php 
    include_once "animal.php";

    class Mamifero extends Animal {
        public function __construct($sexo) {
            parent::__construct($sexo);
        }

        public function amamantar() {
            if ($this->getSexo() == "macho") {
                return "Soy macho, no puedo amamantar";
            } else {
                return "No mires, voy a amamantar";
            }
        }

        public function cuidarCrias() {
            return "Estoy crinado a mis crias";
        }

        public function andar() {
            return "Estoy andando";
        }
    }
?>
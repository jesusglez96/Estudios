<?php
    include_once "animal.php";

    class Ave extends Animal {
        public function __construct($sexo) {
            parent::__construct($sexo);
        }

        public function acicalar() {
            return "Me estoy acicalando";
        }

        public function volar() {
            return "Estoy volando";
        }

        public function ponerHuevo() {
            if ($this->getSexo() == "macho") {
                return "No puedo poner huevos, soy macho";
            } else {
                return "Estoy poniendo un huevo... dejame.";
            }
        }
    }
?>
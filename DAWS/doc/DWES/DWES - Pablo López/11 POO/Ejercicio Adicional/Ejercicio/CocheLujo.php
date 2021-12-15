<?php 
    include_once "Coche.php";

    class CocheLujo extends Coche {
        private $suplemento = 0;

        public function __construct($matricula,$modelo,$precio,$suplemento) {
                $this->suplemento = $suplemento;
                Coche::__construct($matricula,$modelo,$precio);
            }

            public function getPrecio(){
                return parent::getPrecio() + $this->suplemento;
            }

            public function __toString(){
                return parent::__toString()."<td>".$this->suplemento."</td>";
            }
            
            public function getSuplemento(){
                    return $this->suplemento;
                }
        
                public function setSuplemento($suplemento)
                {
                        $this->suplemento = $suplemento;
        
                        return $this;
                }
            }
 
        

?>
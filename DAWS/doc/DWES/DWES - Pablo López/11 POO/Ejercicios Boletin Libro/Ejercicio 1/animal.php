<!-- Crea las clases Animal, Mamifero, Ave, Gato, Perro, Canario, Pinguino y Lagarto. Crea, al menos,
tres métodos específicos de cada clase y redefine el/los método/s cuando sea necesario. Prueba las
clases en un programa en el que se instancien objetos y se les apliquen métodos. Puedes aprovechar
las capacidades que proporciona HTML y CSS para incluir imágenes, sonidos, animaciones, etc.
para representar acciones de objetos; por ejemplo, si el canario canta, el perro ladra, o el ave vuela.
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
        class Animal {
            private $sexo;

            public function __construct($sexo) {
                if (!isset($sexo)) {
                    $this->sexo = "macho";
                } else {
                    $this->sexo = $sexo;
                }
            }

            public function __toString() {
                return "Sexo: $this->sexo";
            }


            public function getSexo()
            {
                return $this->sexo;
            }

            public function setSexo($sexo)
            {
                $this->sexo = $sexo;
                return $this;
            }

            public function comer($comida) {
                return "Estoy comiendo $comida";
            }
            
        }
    ?>
</body>
</html>
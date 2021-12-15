<!-- Confeccionar una clase Menu, con los atributos titulo y enlace (ambos son arrays). Crear los
métodos necesarios que permitan añadir elementos al menú. Crear los métodos que permitan
mostrar el menú en forma horizontal o vertical (según que método llamemos).
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
        class Menu {
            private $titulo;
            private $enlace;

            public function __construct($titulo, $enlace){
                $this->$titulo = $titulo;
                $this->$enlace = $enlace;
            }

            
            public function getEnlace()
            {
                        return $this->enlace;
            }

            public function setEnlace($enlace)
            {
                        $this->enlace = $enlace;

                        return $this;
            }

            public function getTitulo()
            {
                        return $this->titulo;
            }

            public function setTitulo($titulo)
            {
                        $this->titulo = $titulo;

                        return $this;
            }


            
        }
    ?>
</body>
</html>
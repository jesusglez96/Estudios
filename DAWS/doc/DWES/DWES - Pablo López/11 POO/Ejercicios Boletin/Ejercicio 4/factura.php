<!-- Creamos la clase factura con el atributo de clase IVA (21) y los atributos de instancia
ImporteBase, fecha, estado (pagada o pendiente) y productos (array con todos los productos
de la factura y que contienen nombre, precio y cantidad).
Define los métodos AñadeProducto, ImprimeFactura y los getters y setters de los atributos
ImporteBase (solo getter, pues su contenido se actualiza automaticamente), fecha y estado.-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        class Factura {
            private $importeBase;
            private $fecha;
            private $estado;
            private $productos;

            public function __construct($importeBase, $fecha, $estado, $productos){
                $this->importeBase = $importeBase;
                $this->fecha = $fecha;
                $this->estado = $estado;
                $this->productos = $productos;
            }

            public function getImporteBase()
            {
                        return $this->importeBase;
            }


            public function getFecha()
            {
                        return $this->fecha;
            }

            public function setFecha($fecha)
            {
                        $this->fecha = $fecha;

                        return $this;
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
 
            public function getProductos()
            {
                        return $this->productos;
            }

            public function setProductos($productos)
            {
                        $this->productos = $productos;

                        return $this;
            }

            private static $iva = 0.21;
        }
    ?>
</body>
</html>
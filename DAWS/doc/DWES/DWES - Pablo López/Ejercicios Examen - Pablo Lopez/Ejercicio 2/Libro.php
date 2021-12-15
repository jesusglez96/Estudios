<?php 

require_once "BibliotecaDB.php";

class Libro {
    private $isbn;
    private $titulo;
    private $estado;
    private $cliente;

    function __construct($isbn, $titulo, $estado, $cliente) {
        $this->isbn = $isbn;
        $this->titulo = $titulo;
        $this->estado = $estado;
        $this->cliente = $cliente;
    }

    
    public function getIsbn()
    {
        return $this->isbn;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function getCliente()
    {
        return $this->cliente;
    }

    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;

        return $this;
    }
 
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    public function setCliente($cliente)
    {
        $this->cliente = $cliente;

        return $this;
    }

    public static function getLibros() {
        $conexion = BibliotecaDB::connectDB();
        $seleccion = "SELECT isbn, titulo, estado, cliente FROM libro ORDER BY titulo";
        $consulta = $conexion->query($seleccion);
        
        $libros = [];
        
        while ($registro = $consulta->fetchObject()) {
          $libros[] = new Libro($registro->isbn, $registro->titulo, $registro->estado, $registro->cliente);
        }
       
        return $libros;    
      }



}






?>
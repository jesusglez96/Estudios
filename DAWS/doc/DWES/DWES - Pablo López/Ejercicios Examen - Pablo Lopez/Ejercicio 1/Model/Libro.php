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

    public function insert() {
        $conexion = BibliotecaDB::connectDB();
        $insercion = "INSERT INTO libro (titulo, estado, cliente) VALUES (\"".$this->titulo."\", \"".$this->estado."\", \"".$this->cliente."\")";
        $conexion->exec($insercion);
    }
    public function delete() {
        $conexion = BibliotecaDB::connectDB();
        $borrado = "DELETE FROM libro WHERE isbn=\"".$this->isbn."\"";
        $conexion->exec($borrado);
    }
    public function update() {
        $conexion = BibliotecaDB::connectDB();
        $actualiza = "UPDATE libro SET estado=\"".$this->estado."\", cliente=\"".$this->cliente."\" WHERE isbn=\"".$this->isbn."\"";
        $conexion->exec($actualiza);
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

      public static function getLibroById($id) {
        $conexion = BibliotecaDB::connectDB();
        $seleccion = "SELECT isbn, titulo, estado, cliente FROM libro WHERE isbn=\"".$id."\"";
        $consulta = $conexion->query($seleccion);
        $registro = $consulta->fetchObject();
        $libro = new Libro($registro->isbn, $registro->titulo, $registro->estado, $registro->cliente);
        return $libro;
    }
    
    public function alquila($cliente) {
        $this->setcliente($cliente);
        $this->setEstado('alquilado');
        $this->update();
    }
    public function devuelve() {
        $this->setcliente(NULL);
        $this->setEstado('libre');
        $conexion = BibliotecaDB::connectDB();
        $actualiza = "UPDATE libro SET estado=\"".$this->estado."\", cliente=NULL WHERE isbn=\"".$this->isbn."\"";
        $conexion->exec($actualiza);
    }

    public static function getLibrosFiltroTitulo($cad) {
        $conexion = BibliotecaDB::connectDB();
        $seleccion = "SELECT isbn, titulo, estado, cliente FROM libro WHERE titulo LIKE \"%".$cad."%\"";
        $consulta = $conexion->query($seleccion);
        $libros = [];
        while ($registro = $consulta->fetchObject()) {
            $libros[] = new Libro($registro->isbn, $registro->titulo, $registro->estado, $registro->cliente);
        }
        return $libros;
    }

    public static function getLibrosFiltroEstado($estado) {
        $conexion = BibliotecaDB::connectDB();
        $seleccion = "SELECT isbn, titulo, estado, cliente FROM libro WHERE estado = \"".$estado."\"";
        $consulta = $conexion->query($seleccion);
        $libros = [];
        while ($registro = $consulta->fetchObject()) {
            $libros[] = new Libro($registro->isbn, $registro->titulo, $registro->estado, $registro->cliente);
        }
        return $libros;
    }



}






?>
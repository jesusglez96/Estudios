<?php 

require_once "FansDB.php";

class Comunidad {
    private $id;
    private $nombre;

    function __construct($id, $nombre) {
        $this->id = $id;
        $this->nombre = $nombre;
    }


    public static function getComunidades() {
        $conexion = FansDB::connectDB();
        $seleccion = "SELECT id, nombre FROM comunidades";
        $consulta = $conexion->query($seleccion);
        $comunidades = [];
        while ($registro = $consulta->fetchObject()) {
          $comunidades[] = new Comunidad($registro->id, $registro->nombre);
        }
        return $comunidades;    
      }


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }


  
}

    

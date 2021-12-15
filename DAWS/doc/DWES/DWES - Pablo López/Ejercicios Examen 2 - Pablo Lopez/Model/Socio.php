<?php 

require_once "FansDB.php";

class Socio {
    private $id;
    private $nombre;
    private $puntos;
    private $comunidad;

    function __construct($id, $nombre, $puntos, $comunidad) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->puntos = $puntos;
        $this->comunidad = $comunidad;
    }

    public function insert() {
        $conexion = FansDB::connectDB();
        $insercion = "INSERT INTO socios (nombre, puntos, comunidad) VALUES (\"".$this->nombre."\", \"".$this->puntos."\", \"".$this->comunidad."\")";
        $conexion->exec($insercion);
    }
    public function delete() {
        $conexion = FansDB::connectDB();
        $borrado = "DELETE FROM socios WHERE id=\"".$this->id."\"";
        $conexion->exec($borrado);
    }
    public function update() {
        $conexion = FansDB::connectDB();
        $actualiza = "UPDATE socios SET nombre=\"".$this->nombre."\", puntos=\"".$this->puntos."\" WHERE id=\"".$this->id."\"";
        $conexion->exec($actualiza);
    }

    public static function getSocios() {
        $conexion = FansDB::connectDB();
        $seleccion = "SELECT id, nombre, puntos, comunidad FROM socios ORDER BY nombre";
        $consulta = $conexion->query($seleccion);
        $socios = [];
        while ($registro = $consulta->fetchObject()) {
          $socios[] = new Socio($registro->id, $registro->nombre, $registro->puntos, $registro->comunidad);
        }
        return $socios;    
      }

      public static function getSocioById($id) {
        $conexion = FansDB::connectDB();
        $seleccion = "SELECT id, nombre, puntos, comunidad FROM socios WHERE id=\"".$id."\"";
        $consulta = $conexion->query($seleccion);
        $registro = $consulta->fetchObject();
        $socio = new Socio($registro->id, $registro->nombre, $registro->puntos, $registro->comunidad);
        return $socio;
      }

      public function sumaPuntos() {
        $conexion = FansDB::connectDB();
        $sumaPuntos=$this->puntos+5;
        $actualiza = "UPDATE socios SET puntos=\"".$sumaPuntos."\" WHERE id=\"".$this->id."\"";
        $conexion->exec($actualiza);
    }

    public static function getSociosCantidad($cant) {
        $conexion = FansDB::connectDB();
        $seleccion = "SELECT nombre,puntos FROM `socios` ORDER BY puntos DESC LIMIT ".$cant;
        $consulta = $conexion->query($seleccion);
        $socios = [];
        while ($registro = $consulta->fetchObject()) {
            $socios[] = new Socio(null, $registro->nombre, $registro->puntos,null);
        }
        return $socios;
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


    public function getPuntos()
    {
        return $this->puntos;
    }

    public function setPuntos($puntos)
    {
        $this->puntos = $puntos;

        return $this;
    }


    public function getComunidad()
    {
        return $this->comunidad;
    } 
    public function setComunidad($comunidad)
    {
        $this->comunidad = $comunidad;

        return $this;
    }
    }

    

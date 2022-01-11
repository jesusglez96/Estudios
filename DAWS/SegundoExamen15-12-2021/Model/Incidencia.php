<?php
require_once 'IncidenciasDB.php';
class Incidencia
{
    private $id;
    private $descripcion;
    private $profesor;
    private $fecha;
    private $estado;
    private $admin;

    function __construct($id = 0, $profesor = "", $descripcion = "", $fecha = null, $estado = "", $admin = null)
    {
        $this->id = $id;
        $this->descripcion = $descripcion;
        $this->profesor = $profesor;
        $this->fecha = $fecha;
        $this->estado = $estado;
        $this->admin = $admin;
    }

    public function insert()
    {
        $conexion = IncidenciasDB::connectDB();
        $insercion = "INSERT INTO mantenimiento.incidencia (descripcion, profesor, fecha, estado, admin) VALUES ('" . $this->descripcion . "', '" . $this->profesor . "','" . $this->fecha . "', '" . $this->estado . "', '" . $this->admin . "';)";
        $conexion->exec($insercion);
    }
    public function delete()
    {
        $conexion = IncidenciasDB::connectDB();
        $borrado = "DELETE FROM mantenimiento.incidencia WHERE id='" . $this->id . "'";
        $conexion->exec($borrado);
    }
    public function update()
    {
        $conexion = IncidenciasDB::connectDB();
        $actualiza = "UPDATE mantenimiento.incidencia SET descripcion='" . $this->descripcion . "', profesor='" . $this->profesor . "', fecha='" . $this->fecha . "', estado='" . $this->estado . "', admin='" . $this->admin . "'; WHERE id='" . $this->id . "'";
        $conexion->exec($actualiza);
    }
    public static function getincidencia()
    {
        $conexion = IncidenciasDB::connectDB();
        $seleccion = "SELECT id, descripcion, profesor, fecha, estado, admin FROM mantenimiento.incidencia ORDER BY id";
        $consulta = $conexion->query($seleccion);
        $incidencia = [];
        while ($registro = $consulta->fetchObject()) {
            $incidencia[] = new Incidencia($registro->id, $registro->descripcion, $registro->profesor, $registro->fecha, $registro->estado, $registro->admin);
        }
        return $incidencia;
    }
    public static function getIncidenciaById($id)
    {
        $conexion = IncidenciasDB::connectDB();
        $seleccion = "SELECT id, descripcion, profesor, fecha, estado, admin FROM mantenimiento.incidencia WHERE id='" . $id . "'";
        $consulta = $conexion->query($seleccion);
        $registro = $consulta->fetchObject();
        $incidencia = new Incidencia($registro->id, $registro->descripcion, $registro->profesor, $registro->fecha, $registro->estado, $registro->admin);
        return $incidencia;
    }
    public static function getIncidenciasPendientes()
    {
        $conexion = IncidenciasDB::connectDB();
        $seleccion = "SELECT id, descripcion, profesor, fecha, estado, admin FROM mantenimiento.incidencia WHERE estado='PENDIENTE'";
        $consulta = $conexion->query($seleccion);
        $registro = $consulta->fetchObject();
        while ($registro = $consulta->fetchObject()) {
            $incidencia[] = new Incidencia($registro->id, $registro->descripcion, $registro->profesor, $registro->fecha, $registro->estado, $registro->admin);
        }
        return $incidencia;
    }

    public function getid()
    {
        return $this->id;
    }
    public function setid($id)
    {
        $this->id = $id;

        return $this;
    }
    public function getdescripcion()
    {
        return $this->descripcion;
    }
    public function setdescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }
    public function getprofesor()
    {
        return $this->descripcion;
    }
    public function setprofesor($profesor)
    {
        $this->profesor = $profesor;

        return $this;
    }
    public function getfecha()
    {
        return $this->fecha;
    }
    public function setfecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }
    public function getestado()
    {
        return $this->estado;
    }
    public function setestado($estado)
    {
        $this->estado = $estado;

        return $this;
    }
    public function getadmin()
    {
        return $this->admin;
    }

    public function setadmin($admin)
    {
        $this->admin = $admin;
    }
}

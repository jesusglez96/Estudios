<?php
require_once 'EscuelaDB.php';
class Alumno
{
	private $matricula;
	private $nombre;
	private $apellidos;
	private $curso;

	function __construct($matricula = "", $nombre = "", $apellidos = "", $curso = "")
	{
		$this->matricula = $matricula;
		$this->nombre = $nombre;
		$this->apellidos = $apellidos;
		$this->curso = $curso;
	}

	public function insert()
	{
		$conexion = EscuelaDB::connectDB();
		$insercion = "INSERT INTO escuela.alumnos (matricula, nombre, apellidos, curso) VALUES (\"" . $this->matricula . "\", \"" . $this->nombre . "\", \"" . $this->apellidos . "\", \"" . $this->curso . "\")";
		$conexion->exec($insercion);
	}
	public function delete()
	{
		$conexion = EscuelaDB::connectDB();
		$borrado = "DELETE FROM escuela.alumnos WHERE matricula=\"" . $this->matricula . "\"";
		$conexion->exec($borrado);
	}
	public function update()
	{
		$conexion = EscuelaDB::connectDB();
		$actualiza = "UPDATE escuela.alumnos SET nombre=\"" . $this->nombre . "\", apellidos=\"" . $this->apellidos . "\", curso=\"" . $this->curso . "\" WHERE matricula=\"" . $this->matricula . "\"";
		$conexion->exec($actualiza);
	}
	public static function getAlumnos()
	{
		$conexion = EscuelaDB::connectDB();
		$seleccion = "SELECT matricula, nombre, apellidos, curso FROM escuela.alumnos ORDER BY apellidos";
		$consulta = $conexion->query($seleccion);
		$alumnos = [];
		while ($registro = $consulta->fetchObject()) {
			$alumnos[] = new Alumno($registro->matricula, $registro->nombre, $registro->apellidos, $registro->curso);
		}
		return $alumnos;
	}
	public static function getAlumnoById($mat)
	{
		$conexion = EscuelaDB::connectDB();
		$seleccion = "SELECT matricula, nombre, apellidos, curso FROM escuela.alumnos WHERE matricula=\"" . $mat . "\"";
		$consulta = $conexion->query($seleccion);
		$registro = $consulta->fetchObject();
		$alumno = new Alumno($registro->matricula, $registro->nombre, $registro->apellidos, $registro->curso);
		return $alumno;
	}
	public static function getAlumnosByCurso($curso)
	{
		$conexion = EscuelaDB::connectDB();
		$seleccion = "SELECT matricula, nombre, apellidos, curso FROM escuela.alumnos WHERE curso LIKE \""  . "%" . $curso  . "%" . "\"";
		$consulta = $conexion->query($seleccion);
		$alumnos = [];
		while ($registro = $consulta->fetchObject()) {
			$alumnos[] = new Alumno($registro->matricula, $registro->nombre, $registro->apellidos, $registro->curso);
		}
		return $alumnos;
	}
	public static function getAlumnosByName($name)
	{
		$conexion = EscuelaDB::connectDB();
		$seleccion = "SELECT matricula, nombre, apellidos, curso FROM escuela.alumnos WHERE nombre LIKE \"" . "%" . $name  . "%" . "\"";
		$consulta = $conexion->query($seleccion);
		$alumnos = [];
		while ($registro = $consulta->fetchObject()) {
			$alumnos[] = new Alumno($registro->matricula, $registro->nombre, $registro->apellidos, $registro->curso);
		}
		return $alumnos;
	}

	public function getMatricula()
	{
		return $this->matricula;
	}

	public function setMatricula($matricula)
	{
		$this->matricula = $matricula;

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

	public function getApellidos()
	{
		return $this->apellidos;
	}

	public function setApellidos($apellidos)
	{
		$this->apellidos = $apellidos;

		return $this;
	}

	public function getCurso()
	{
		return $this->curso;
	}

	public function setCurso($curso)
	{
		$this->curso = $curso;

		return $this;
	}
}

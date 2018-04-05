<?php
//function conectarse(){
$conexion =new MySQLi("localhost", "root","", "mensma");
		if ($conexion -> connect_errno) {
			die( "Fallo la conexión a MySQL: (" . $conexion-> mysqli_connect_error()
				. ") " . $conexion -> mysqli_connect_error());
		}

function Conectar()
{
		global $conn;// indica q se hace referencia a la variable conn q este afuera de la funcion
		$usuario ="root";
		$clave="";
		$conn = new PDO('mysql:host=localhost;dbname=mensma',$usuario,$clave);
	}
?>

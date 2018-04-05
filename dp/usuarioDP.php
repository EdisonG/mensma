<?php
require"../MD/usuarioMD.php";
$procesar="";

if(isset($_POST['procesar'])){
	$procesar=$_POST['procesar'];
}
if(isset($_POST['iniciar'])){
	$procesar=$_POST['iniciar'];
}
if(isset($_POST['Editar'])){
	$procesar=$_POST['Editar'];
}
if(isset($_POST['eliminarU'])){
	$procesar=$_POST['eliminarU'];
}


//Validacion para login de Usuarios
if(isset($_POST['usuario'])){
	$username=$_POST['usuario'];
}
if(isset($_POST['clave'])){
	$clave=$_POST['clave'];
}
if($procesar=="Iniciar"){
	validar_sesion($username,$clave,$conexion);
}

//Ingreso para el formulario de Usuarios
if(isset($_POST['codUsuario'])){
	$codUsuario=$_POST['codUsuario'];
}
if(isset($_POST['usuarioUsuario'])){
	$usuarioUsuario=$_POST['usuarioUsuario'];
}
if(isset($_POST['nombreUsuario'])){
	$nombreUsuario=$_POST['nombreUsuario'];
}
if(isset($_POST['mailUsuario'])){
	$mailUsuario=$_POST['mailUsuario'];
}
if(isset($_POST['pass'])){
	$pass=$_POST['pass'];
}
if(isset($_POST['rpass'])){
	$rpass=$_POST['rpass'];
}
if($procesar=="Guardar"){
	insertarUsuario($codUsuario,$usuarioUsuario,$nombreUsuario,$mailUsuario,$pass,$rpass,$conexion);
}

//Datos para editar el Usuario
if(isset($_POST['codUsuario'])){
	$codigo=$_POST['codUsuario'];
}
if(isset($_POST['nombreUsuario'])){
	$nombre=$_POST['nombreUsuario'];
}
if(isset($_POST['usuarioUsuario'])){
	$usuario=$_POST['usuarioUsuario'];
}
if(isset($_POST['contrasenaUsuario'])){
	$password=$_POST['contrasenaUsuario'];
}
if($procesar=="Editar"){

	EditarRegistro($codigo,$nombre,$usuario,$password,$conexion);
}
?>
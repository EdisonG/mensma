<?php
require"../MD/usuarioMD.php";
$procesar="";

if(isset($_POST['procesar'])){
	$procesar=$_POST['procesar'];
}
if(isset($_POST['iniciar'])){
	$procesar=$_POST['iniciar'];
}
if(isset($_POST['editarU'])){
	$procesar=$_POST['editarU'];
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
if(isset($_POST['mail'])){
	$mail=$_POST['mail'];
}
if(isset($_POST['nick'])){
	$nick=$_POST['nick'];
}
if(isset($_POST['pass'])){
	$pass=$_POST['pass'];
}
if(isset($_POST['rpass'])){
	$rpass=$_POST['rpass'];
}
if($procesar=="Ingresar"){
	insertarUsuario($nick,$mail,$pass,$rpass,$conexion);
}

//Datos para editar el Usuario
if(isset($_POST['txtId'])){
	$codigo=$_POST['txtId'];
}
if(isset($_POST['txtUsuario'])){
	$user=$_POST['txtUsuario'];
}
if(isset($_POST['txtEmail'])){
	$email=$_POST['txtEmail'];
}
if(isset($_POST['txtClave'])){
	$password=$_POST['txtClave'];
}
if($procesar=="Editar"){
	EditarRegistro($codigo,$user,$email,$password,$conexion);
}

//eliminar usuario por administrador
if(isset($_POST['txtIdusuario'])){
	$idusuario=$_POST['txtIdusuario'];
}
if($procesar=="Eliminar"){
	ElimnarUsuario($idusuario,$conexion);
}
?>
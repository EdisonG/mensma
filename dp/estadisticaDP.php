<?php
require"../MD/estadisticaMD.php";
$procesar="";

if(isset($_POST['procesar'])){
	$procesar=$_POST['procesar'];
}
if(isset($_POST['Editar'])){
	$procesar=$_POST['Editar'];
}

//Ingreso para el formulario de Usuarios
if(isset($_POST['leidosEstadistica'])){
	$leido=$_POST['leidosEstadistica'];
}
if(isset($_POST['noleidosEstadistica'])){
	$noleido=$_POST['noleidosEstadistica'];
}
if(isset($_POST['privadosEstadisticas'])){
	$privado=$_POST['privadosEstadisticas'];
}
if(isset($_POST['inactivosEstadisticas'])){
	$inactivo=$_POST['inactivosEstadisticas'];
}
if(isset($_POST['spamEstadisticas'])){
	$spam=$_POST['spamEstadisticas'];
}
if(isset($_POST['codCampana'])){
	$codCampana=$_POST['codCampana'];
}
if($procesar=="Guardar"){
	insertarEstadistica($leido,$noleido,$privado,$inactivo,$spam,$codCampana,$conexion);
}

//Datos para editar el Usuario
if(isset($_POST['codEstadistica'])){
	$codigo=$_POST['codEstadistica'];
}
if(isset($_POST['leidoEstadistica'])){
	$leido=$_POST['leidoEstadistica'];
}
if(isset($_POST['noleidoEstadistica'])){
	$noleido=$_POST['noleidoEstadistica'];
}
if(isset($_POST['privadoEstadistica'])){
	$privado=$_POST['privadoEstadistica'];
}
if(isset($_POST['inactivoEstadistica'])){
	$inactivo=$_POST['inactivoEstadistica'];
}
if(isset($_POST['spamEstadistica'])){
	$spam=$_POST['spamEstadistica'];
}
if($procesar=="Editar"){
	EditarRegistro($codigo,$leido,$noleido,$privado,$inactivo,$spam);
}
?>
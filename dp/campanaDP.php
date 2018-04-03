<?php
require"../MD/campanaMD.php";
$procesar="";

if(isset($_POST['Editar'])){
	$procesar=$_POST['Editar'];
}

//Datos para editar el Usuario
if(isset($_POST['codUsuario'])){
	$codigo=$_POST['codUsuario'];
}
if(isset($_POST['precioCampana'])){
	$precio=$_POST['precioCampana'];
}
if($procesar=="Editar"){
	EditarRegistro($codigo,$precio);
}
// datos para ingresar la campaña
if(isset($_POST['name_campana'])){
	$nom_usuario=$_POST['name_campana'];
}
if(isset($_POST['eslogan_campana'])){
	$tipoletra=$_POST['eslogan_campana'];
}
if(isset($_POST['imagen_campana'])){
	$imagen=$_POST['imagen_campana'];
}
if(isset($_POST['gif_campana'])){
	$gif=$_POST['gif_campana'];
}
if(isset($_POST['mensaje_campana'])){
	$archivo=$_POST['mensaje_campana'];
}
if(isset($_POST['video_campana'])){
	$video=$_POST['video_campana'];
}
if(isset($_POST['numero_registros_campana'])){
	$numero_registrados=$_POST['numero_registros_campana'];
}
if(isset($_POST['numero_registros_campana'])){
	$fecha_inicio=$_POST['nom_usuario'];
}
if(isset($_POST['nom_usuario'])){
	$fecha_fin=$_POST['nom_usuario'];
}
if(isset($_POST['nom_usuario'])){
	$nombre=$_POST['nom_usuario'];
}
if(isset($_POST['nom_usuario'])){
	$eslogan=$_POST['nom_usuario'];
}
if($procesar=="insert"){
	insertCampana($nom_usuario,$tipoletra,$imagen,$gif,$archivo,$video,$numero_registrados, $fecha_inicio, $fecha_fin, $nombre, $eslogan  );
}
?>
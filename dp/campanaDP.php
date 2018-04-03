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
?>
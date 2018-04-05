<?php	
	session_start();
	if(empty($_SESSION['USUARIOUSUARIO'])){
		session_start();
		session_destroy();
		header("Location: ../gui/index.php");
	}

?>

<?php
require"../MD/campanaMD.php";
require"../funciones/funciones.php";

$procesar="";

if(isset($_POST['Editar'])){
	$procesar=$_POST['Editar'];
}
if(isset($_POST['accion'])){
	$procesar=$_POST['accion'];
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
if(isset($_SESSION['CODUSUARIO'])){

	$nom_usuario=$_SESSION['CODUSUARIO'];
}

if(isset($_POST['eslogan_campana'])){
	$eslogan=$_POST['eslogan_campana'];
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
if(isset($_POST['imagen_campana'])){
	$archivo=$_POST['imagen_campana'];
}
if(isset($_POST['video_campana'])){
	$video=$_POST['video_campana'];
}
if(isset($_POST['numero_registros_campana'])){
	$numero_registrados=$_POST['numero_registros_campana'];
}
if(isset($_POST['fecha_inicio_campana'])){
	$fecha_inicio=$_POST['fecha_inicio_campana'];
}
if(isset($_POST['fecha_fin_campana'])){
	$fecha_fin=$_POST['fecha_fin_campana'];
}
if(isset($_POST['eslogan_campana'])){
	$eslogan=$_POST['eslogan_campana'];
}
if(isset($_POST['name_campana'])){
	$nombre=$_POST['name_campana'];
}


if($procesar=="insert"){
	//echo  $_SESSION['CODUSUARIO']."<br>"; die();
	// subir imagen 
	/*if(!empty($_FILES['uploaded_file']))
	{
	  $path = "uploads/";
	  $directorio_actual=  basename(dirname(__FILE__)); //"cars"

	  $filename=  basename( $_FILES['uploaded_file']['name']);
	  echo "<script>alert('archivo: ".$filename." path:".$path."/".$directorio_actual." ');</script>";
	  $path = $path .$filename;
	  subir_archivo($filename, $path ) ;
	}*/

	if(!empty($_FILES['uploaded_file']))
	{
	$path = "../uploads/";  //$path = $path . basename( $_FILES['uploaded_file']['name']);
    $temp_filename= $_FILES['uploaded_file']['tmp_name'];
    $filename =  basename( $_FILES['uploaded_file']['name']);

	subir_archivo($temp_filename,$filename, $path );

	}
	// subir video
	if(!empty($_FILES['uploaded_video']))
	{
	$path = "../uploads/";  //$path = $path . basename( $_FILES['uploaded_file']['name']);
    $temp_filename= $_FILES['uploaded_video']['tmp_name'];
    $filename =  basename( $_FILES['uploaded_video']['name']);

	subir_archivo($temp_filename,$filename, $path );

	}
	// subir gif

	if(!empty($_FILES['uploaded_gif']))
	{
	$path = "../uploads/";  //$path = $path . basename( $_FILES['uploaded_file']['name']);
    $temp_filename= $_FILES['uploaded_gif']['tmp_name'];
    $filename =  basename( $_FILES['uploaded_gif']['name']);

	subir_archivo($temp_filename,$filename, $path );

	}


	//insertCampana($nom_usuario,$tipoletra,$imagen,$gif,$archivo,$video,$numero_registrados, $fecha_inicio, $fecha_fin, $nombre, $eslogan  );

}


?>
<?php 

include_once("campanaMD.php");
require_once("conexion.php");




$campana = new CampanaMD();




// insert  
$campana->nombre = "campana prueba";
$campana->nom_usuario = "admin";
$campana->eslogan = "eslogan prueba insert"; 
$campana->tipoletra = "negrilla"; 
$campana->mensaje = "mensaje prueba isert"; 
$campana->fecha_inicio = "2018-01-01 00:00:00"; 
$campana->fecha_fin = "2018-01-01 00:00:00"; 
$campana->numero_registrados = 800; 
$campana->archivo = "excel.csv"; 
$campana->precio = 900; 
$campana->imagen = "imagen.jpg"; 
$campana->video = "video.mp4"; 
$campana->gif = "gif.gif";
print_r($campana);
/*$campana['nom_usuario = "admin";
$campana->$eslogan = "eslogan prueba insert"; 
$campana->$tipoletra = "negrilla"; 
$campana->$mensaje = "mensaje prueba isert"; 
$campana->$fecha_inicio = "01-01-2018"; 
$campana->$fecha_fin = "01-01-2018"; 
$campana->$numero_registrados = 800; 
$campana->$archivo = "excel.csv"; 
$campana->$precio = 900; 
$campana->$imagen = "imagen.jpg"; 
$campana->$video = "video.mp4"; 
$campana->$gif = "gif.gif"; */
print_r($campana);

$campana->insertCampanas();

// delete

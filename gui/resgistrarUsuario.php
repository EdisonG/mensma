<!DOCTYPE html>
<?php	
	session_start();
	if(empty($_SESSION['USUARIOUSUARIO'])){
		session_start();
		session_destroy();
		header("Location: ../gui/index.php");
	}
?>

<?php
require_once('../conexion/conexion.php'); //Se incrusta el archivo donde están las fuciones de uso común	
$id=$_SESSION['CODUSUARIO'];
$tipo=$_SESSION['TIPOUSUARIO'];
Conectar(); 
$sql = "select * from usuarios";

?>

<html lang="es">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<head>
<title>MENSMA</title>
<link rel="stylesheet" href="css\Estilo1.css" type="text/css" /> 
<style type="text/css"> 
</style>
</head>
    <title>MENSMA</title>
</head>
<body>
 
<!-- our markup -->
<header><h1>MENSMA</h1></header>
</br>

<script>
$(window).scroll(function() {
    if ($(this).scrollTop() > 1){  
        $('header').addClass("sticky");
    }
    else{
        $('header').removeClass("sticky");
    }
});
</script>
 <body id="cuerpo">

<!-- MENU PRINCIPAL -->

<ul id="menu-bar" align="center">
    <li><a align="right">Bienvenido:  <strong><?php echo $_SESSION['USUARIOUSUARIO'];?></strong> </a></li>
    <li><a href="principal.php" target="iframe_a" >Principal</a></li>
    <li><a href="dashboardCampanas.php" target="iframe_a" >Dashboard</a></li>
    <?php
    if($tipo=="administrador"){
    ?>
    <li><a >Men&uacute; de Usuarios</a>
        <ul>
          <li><a align="left" href="RegistrarUsu.php" target="iframe_a">Registrar Usuarios</a></li>
          <li><a align="left" href="ConsultarUsu.php" target="iframe_a">Usuarios Registrados</a></li>
          <li><a align="left" href="ConsultarUsu.php" target="iframe_a">Registro de Sesiones</a></li>
        </ul>
    </li>
    <?php
    }
    ?>
    <?php
    if($tipo=="usuario"){
    ?>
      <li><a href="editar.php?id=<?php echo $_SESSION['CODIGO'];?>" target="iframe_a" >Editar Usuario </a></li>
    <?php
    }
    ?>

    <li><a href="../conexion/desconectar.php" align="right">Cerrar Sesion</a></li>
</ul>

<p><iframe height="900px" width="95%" src="dashboardCamoanas.php" name="iframe_a"></iframe></p>

<!--end navBar div -->
<div id="siteInfo"> &copy;2018 ALESOFT-ECUADOR</div>
<br />
</body>
</html>
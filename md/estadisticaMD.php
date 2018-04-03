<?php
require"../conexion/conexion.php";
session_start();

function insertarEstadistica($leido,$noleido,$privado,$inactivo,$spam,$codCampana,$conexion){
	$query="INSERT INTO `estadisticas`(`CODCAMPANA`, `LEIDOESTADISTICA`, `NOLEIDOESTADISTICA`, `PRIVADOESTADISTICA`, `INACTIVOESTADISTICA`, `SPAMESTADISTICA`) VALUES('$codCampana','$leido','$noleido','$privado','$inactivo','$spam')";
	//echo($query);exit;
	$resultado=mysqli_query($conexion,$query);
	echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';	
	header("location:../gui/registrarUsuario.php");
}

function EditarRegistro($codigo,$leido,$noleido,$privado,$inactivo,$spam)
{	
	try{
		global $conn;
		Conectar();
		$sql = "UPDATE `estadisticas` SET `LEIDOESTADISTICA`=$leido,`NOLEIDOESTADISTICA`=$noleido,`PRIVADOESTADISTICA`=$privado,`INACTIVOESTADISTICA`=$inactivo,`SPAMESTADISTICA`= $spam WHERE `CODESTADISTICA`=$codigo";
		//echo($sql);exit;
		$cursor = $conn->Prepare($sql);
		$cursor->execute();
		echo '<script>alert("PRECIO MODIFICADO")</script> ';
		echo "<script>location.href='../gui/dashboardCampana.php'</script>";
	}
	catch(PDOException $e)
	{
		echo("Error!; ".$e->getMessage()."<br/>");
	}
	$cursor = null;
	$conn = null;
}
?>
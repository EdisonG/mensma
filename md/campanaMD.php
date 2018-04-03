<?php
require"../conexion/conexion.php";

function EditarRegistro($codigo,$precio)
{	
	try{
		global $conn;
		Conectar();
		$sql = "UPDATE `campanas` SET `PRECIOCAMPANA`='$precio' WHERE `CODCAMPANA`=$codigo";
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
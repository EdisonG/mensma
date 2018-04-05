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
function insertCampana($nom_usuario,$tipoletra,$imagen,$gif,$archivo,$video,$numero_registrados, $fecha_inicio, $fecha_fin, $nombre, $eslogan  )
{	
	try{
		global $conn;
		Conectar();
		$sql = "INSERT INTO `campanas` 
         ( `CODUSUARIO`, `TIPOLETRACAMPANA`, `IMAGENCAMPANA`, `GIFCAMPANA`, `BASECAMPANA`, `VIDEOCAMPANA`, `NUMCLIENTESCAMPANA`, `FECHAINICAMPANA`, `FECHAFINCAMPANA`, `PRECIOCAMPANA`, `FECHACREACIONCAMPANA`, `TITULOCAMPANA`, `ESLOGANCAMPANA`)
         VALUES  ( '$nom_usuario', '$tipoletra', '$imagen', '$gif', '$archivo', '$video', $numero_registrados, '$fecha_inicio', '$fecha_fin', 0, now() , '$nombre', '$eslogan') ";
       // echo ($sql); die();
		//echo($sql);exit;
		$cursor = $conn->Prepare($sql);
		$cursor->execute();
		echo '<script>alert("Se ingreso correctamente !")</script> ';
		echo "<script>location.href='../gui/pgprin.php'</script>";
	}
	catch(PDOException $e)
	{
		echo("Error!; ".$e->getMessage()."<br/>");
	}
	$cursor = null;
	$conn = null;
}

function deleteCampana($cod_campana)
{	
	try{
		global $conn;
		Conectar();
        $sql = " DELETE from campanas WHERE  campanas.CODCAMPANA= ".$cod_campana;
        //echo ($query);
		//echo($sql);exit;
		$cursor = $conn->Prepare($sql);
		$cursor->execute();
		echo '<script>alert("Se elimino correctamente !")</script> ';
		echo "<script>location.href='../gui/pgprin.php'</script>";
	}
	catch(PDOException $e)
	{
		echo("Error!; ".$e->getMessage()."<br/>");
	}
	$cursor = null;
	$conn = null;
}


    ?>
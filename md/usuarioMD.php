<?php
require"../conexion/conexion.php";
session_start();

function insertarUsuario($nick,$mail,$pass,$rpass,$conexion){
	$validarnick=mysqli_query($conexion,"SELECT * FROM USUARIO WHERE USUARIO='$nick'");
	$validar_nick=mysqli_num_rows($validarnick);
		if($pass==$rpass){
			if($validar_nick>0){
				echo ' <script language="javascript">alert("Atencion, ya existe el USUARIO designado, verifique sus datos");</script> ';
			}else{
				$query="INSERT INTO usuario (`MAIL`, `USUARIO`, `CLAVE`)VALUES('$mail','$nick','$pass')";
				//echo($query);exit;
				$resultado=mysqli_query($conexion,$query);
			echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';	
			}
			}else{
				echo 'Las contraseñas son incorrectas';
			}
		}

function validar_sesion($username,$clave,$conexion){
		$sql=mysqli_query($conexion,"SELECT * FROM usuarios WHERE USUARIOUSUARIO='$username'");
	if($f=mysqli_fetch_assoc($sql)){
		if($clave==$f['CONTRASENAUSUARIO']){	
			$_SESSION['USUARIOUSUARIO']=$f['USUARIOUSUARIO'];
			$_SESSION['CODUSUARIO']=$f['CODUSUARIO'];
			$_SESSION['IMAGENUSUARIO']=$f['IMAGENUSUARIO'];
			$_SESSION['TIPOUSUARIO']=$f['TIPOUSUARIO'];
			header("location:../gui/pagprin.php");
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		    echo "<script>location.href='../gui/index.php'</script>";
		}
	}
}

function EditarRegistro($codigo,$user,$email,$password)
{	
	try{
		global $conn;
		Conectar();
		$sql = "UPDATE `usuario` Set `USUARIO`='$user', `MAIL`='$email', `CLAVE`='$password' WHERE `CODIGO`=$codigo";
		//echo($sql);exit;
		$cursor = $conn->Prepare($sql);
		$cursor->execute();
		echo '<script>alert("USUARIO MODIFICADO")</script> ';
		echo "<script>location.href='../gui/pagprin.php'</script>";
	}
	catch(PDOException $e)
	{
		echo("Error!; ".$e->getMessage()."<br/>");
	}
	$cursor = null;
	$conn = null;
}


function ElimnarUsuario($idusuario,$conexion){
		$query="DELETE FROM `usuario` WHERE codigo=".$idusuario."";
				echo($query);exit;
				$resultado=mysqli_query($conexion,$query);
}

?>
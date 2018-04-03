<?php
require"../conexion/conexion.php";
session_start();

function insertarUsuario($codUsuario,$usuarioUsuario,$nombreUsuario,$imagenUsuario,$pass,$rpass,$conexion){
	$validarnick=mysqli_query($conexion,"SELECT * FROM usuarios WHERE USUARIOUSUARIO='$usuarioUsuario'");
	$validar_nick=mysqli_num_rows($validarnick);
		if($pass==$rpass){
			if($validar_nick>0){
				echo ' <script language="javascript">alert("Atencion, ya existe el USUARIO designado, verifique los datos");</script> ';
				header("location:../gui/registrarUsuario.php");
			}else{
				$query="INSERT INTO `usuarios`(`CODUSUARIO`, `USUARIOUSUARIO`, `CONTRASENAUSUARIO`, `NOMBREUSUARIO`, `FECHACREACIONUSUARIO`, `IMAGENUSUARIO`, `TIPOUSUARIO`) VALUES('$codUsuario','$usuarioUsuario','$pass','$nombreUsuario',now(),'$imagenUsuario','usuario')";
			//	echo($query);exit;
				$resultado=mysqli_query($conexion,$query);
			echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';	
			header("location:../gui/registrarUsuario.php");
			}
			}else{
				echo '<script language="javascript">alert("Las contraseñas son incorrectas");</script>';
				header("location:../gui/registrarUsuario.php");
			}
		}

function validar_sesion($username,$clave,$conexion){
	$sql1=mysqli_query($conexion,"SELECT * FROM usuarios");
	$sql=mysqli_query($conexion,"SELECT * FROM usuarios WHERE USUARIOUSUARIO='$username'");
		if($f1=mysqli_fetch_assoc($sql1)){
			if($username!=$f1['USUARIOUSUARIO']){
				echo '<script>alert("USUARIO NO REGISTRADO")</script> ';
				echo "<script>location.href='../gui/index.php'</script>";
			}elseif($f=mysqli_fetch_assoc($sql)){
			if($clave==$f['CONTRASENAUSUARIO']){	
				$codigoUsuario=$f['CODUSUARIO'];
				$_SESSION['USUARIOUSUARIO']=$f['USUARIOUSUARIO'];
				$_SESSION['CODUSUARIO']=$f['CODUSUARIO'];
				$_SESSION['IMAGENUSUARIO']=$f['IMAGENUSUARIO'];
				$_SESSION['TIPOUSUARIO']=$f['TIPOUSUARIO'];
				$query="INSERT INTO `bitacoras`(`CODUSUARIO`, `DESCRIPCIONBITACORA`, `FECHABITACORA`) VALUES ('$codigoUsuario','ingreso al sistema',now())";
				//echo($query);exit;
				$resultado=mysqli_query($conexion,$query);
				header("location:../gui/pagprin.php");
			}else{
				echo '<script>alert("Contrasena no valida")</script> ';
				echo "<script>location.href='../gui/index.php'</script>";
			}	
		}
	}
}	

function EditarRegistro($codigo,$nombre,$usuario,$password,$conexion)
{	
	try{
		global $conn;
		Conectar();
		$sql = "UPDATE `usuarios` Set `USUARIOUSUARIO`='$usuario', `NOMBREUSUARIO`='$nombre', `CONTRASENAUSUARIO`='$password' WHERE `CODUSUARIO`='$codigo'";
		//echo($sql);exit;
		$cursor = $conn->Prepare($sql);
		$cursor->execute();
		echo '<script>alert("USUARIO MODIFICADO")</script> ';
		echo "<script>location.href='../gui/registrarUsuario.php'</script>";
	}
	catch(PDOException $e)
	{
		echo("Error!; ".$e->getMessage()."<br/>");
	}
	$cursor = null;
	$conn = null;
}
?>
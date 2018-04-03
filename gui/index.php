<?php
require"../dp/usuarioDP.php";
?>
<html>
<head>
	<meta charset="utf-8">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
	<title>MensmaSoft</title>
</head>
<body background="http://localhost/Mensma/gui/imagenes/apps-ok.jpg" style="background-attachments: fixed">
	<center><div class="tit"><h2 style="color: #000000;" align="Center">Inicio de sesión</h2>
		<center><div class="Ingreso">

	<table border="0" align="center" valign="middle"><tr>
		<td rowspan=2>
		<form action="../dp/usuarioDP.php" method="post">
		<table border="0">
		<tr><td><label><b>Usuario: </b></label></td>
			<td> <input type="text" name="usuario"></td></tr>
		<tr><td><label><b>Contraseña: </b></label></td>
			<td><input type="password" name="clave"></td></tr><tr><td></td>
		<td align=right><input type="submit" name="iniciar" value="Iniciar"></td>
			</tr></tr></table>
		</form>
</body>
</html>
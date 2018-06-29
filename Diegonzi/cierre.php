<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	//reanuda la sesion  para saber cual cerrar
	session_start();
	//cierra la sesion
	session_destroy();
	//redirige al formulario de login
	header("location:index.php");


 ?>
</body>
</html>

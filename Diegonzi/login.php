<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php 

	try{
		//conexion
		$base=new PDO("mysql:host=localhost;dbname=diegonzi", "root", "");
		$base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		//consulta
		$sql="SELECT * FROM USUARIOS WHERE USUARIOS=:marc_usuario AND PASSWORD=:marc_password";
		//prepara la consulta
		$resultado=$base->prepare($sql);

		//"rescata" usuario
		$usuario=htmlentities(addslashes($_POST["usuario"]));
		//"rescata" password
		$password=htmlentities(addslashes($_POST["password"]));

		//bindea valor de la variable en el marcador
		$resultado->bindValue(":marc_usuario",$usuario);
		$resultado->bindValue(":marc_password",$password);

		//ejecuta consulta sql
		$resultado->execute();
									//si lo encuentra devuelve 1, sino 0.
		$numero_registro=$resultado->rowCount();

		if($numero_registro!=0){
			
			//inicia sesion
			session_start();
			//almacena "usuario" en una variable superglobal para que se pueda utilizar en cualquier pagina
			$_SESSION["usuario"]=$_POST["usuario"];
			//redirije a la pagina usuario registrado
			header("location:index.php");

		}else{
			//redirije a la pagina login
			header("location:formulario_login.php");

		}



	}catch(exception $e){

		die("Error" . $e->getMessage());


	}

	 ?>
	
</body>
</html>
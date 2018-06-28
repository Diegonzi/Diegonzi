<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 
	//Guarda el valor que viene de el buscador
	$busqueda_codigo= $_POST["codigo"];
	$busqueda_nombre= $_POST["nombre"];
	$busqueda_precio= $_POST["precio"];
	$busqueda_stock= $_POST["stock"];
	$busqueda_fecha= $_POST["fecha"];



	try{
		//CONEXION CON BBDD
		$base=new PDO('mysql:host=localhost; dbname=diegonzi','root','');
 		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$base->exec("SET CHARACTER SET utf8");

		  $sql= "INSERT INTO PRODUCTOS(CODIGO,NOMBRE,PRECIO,STOCK,FECHA) VALUES (:marc_codigo,:marc_nombre,:marc_precio,:marc_stock,:marc_fecha)";
		//PDOstatement(sentencia sql)
		$resultado=$base->prepare($sql);
		//reemplaza el ? por lo que hay en los parentesis
		//tabla virtual
		$resultado->execute(array(":marc_codigo"=>$busqueda_codigo,":marc_nombre"=>$busqueda_nombre, ":marc_precio"=>$busqueda_precio,":marc_stock"=>$busqueda_stock,":marc_fecha"=>$busqueda_fecha));

		//si estamos adentro del try significa que todo va bien
		echo "Registro insertado";
	
		//Cierra la  "tabla virtual"
		$resultado->closeCursor();
	//SI FALLA CAPTURA LA EXCEPCION
	}catch(exception $e){


		die('Error: ' . $e->GetMessage());

   //Finalmente
	}finally{
		//libera memoria 
		$base=null;
	}



 ?>
	
</body>
</html>
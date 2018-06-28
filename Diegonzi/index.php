<?php 

	require "devuelve_productos.php";

	$bus=$_GET ["buscar"];

	$productos=new DevuelveProductos();
	//guarda lo que devuelva el get
	$array_productos=$productos->get_productos($bus);

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="estilos.css"/>
</head>
<body>
	<?php 

		foreach($array_productos as $elemento){
			echo "<div id=productos>"	
			 echo "<table><tr><td>";
			 echo "CODIGO: " . $elemento['CODIGO']."</td><td>";
			 echo "NOMBRE: " . $elemento['NOMBRE']."</td><td>";
			 echo "PRECIO: " . $elemento['PRECIO']."</td><td>";
			 echo "STOCK: " . $elemento['STOCK']."</td></tr></table>";
			 echo "<br>";
			 echo "<br>";
			echo"</div>"
				}



	 ?>
	
</body>
</html>
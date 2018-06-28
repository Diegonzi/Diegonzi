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
	<title>Productos</title>
	<style>
		h1{
			font-family:candara;
			font-size: 60px;
		}
		#productos{
  			font-family: sans-serif;
  			font-size: 20px;
  			border: 2px solid black;
  			width: 300px;
  			background-color: #FFEFEB; 
  			display: inline-block;
  			margin-right: 10px;
		}
		p{
			margin-left: 5px;

		}

	</style>
</head>
<body>
	<h1>Productos</h1>

	<?php 

		foreach($array_productos as $elemento){
			echo "<div id=productos>";	
			
			 echo "<p><strong>Codigo del producto: </strong>" . $elemento['CODIGO']."</p>";
			 echo "<p><strong>Nombre:</strong> " . $elemento['NOMBRE']."</p>";
			 echo "<p><strong>Precio:</strong> " . $elemento['PRECIO']."</p>";
			 echo "<p><strong>Stock:</strong> " . $elemento['STOCK']."</p>";			 			 
			echo"</div>";
				}



	 ?>
	
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

<style >
	h1{text-align:center;}
	
	table{
		width:25%;
		background-color:#FFC;
		border:2px dotted #F00;
		margin:auto; 
	}
	.izq{text-align:right;
	}
	.der{
		text-align:left;
	}
	td{
		text-align:center;
		padding:10px;
	}
</style>
</head>
<body>
	<h1> INTRODUCE TUS DATOS</h1>
	<form action="login.php" method="post">
		<table>
			<tr>
				<td class="izq">
					Usuario:</td><td class="der"><input type= "text" name="usuario"></td>
			</tr>
		<tr>
			<td class="izq">Password:</td><td class="der"><input type="password" name="password"></td></tr>
		<tr><td colspan="2"><input type="submit" name="enviar" value="LOGIN"></td></tr></table>
		</table>



	
</body>
</html>
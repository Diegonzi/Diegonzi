<!doctype html>
<html>
    
    <head>
    
        <meta charset="utf-8">
        <title>Documento sin título</title>
        
        <style>
		
		table{
			width:300px;
			margin:auto;
			background-color:#FFC;
			border:2px solid #F00;
			padding:5px;
			
		}
		
		td{
			text-align:center;
			
		}
		
		
		</style>
        
    </head>
    
    <body>
    
        <form action="pagina_insertar.php" method="post">
        <table><tr>
          <td>
            Codigo</td><td><input type="text" name="codigo" id="codigo"></td></tr>
           <tr>
            
           <tr>
             <td>Nombre</td>
             <td><input type="text" name="nombre" id="nombre"></td>
           </tr>
           <tr>
             <td>Precio</td>
             <td><input type="text" name="precio" id="precio"></td>
           </tr>
           <tr>
             <td>Stock</td>
             <td><input type="text" name="stock" id="stock"></td>
           </tr>
           <tr>
             <td>Fecha </td>
             <td><input type="text" name="fecha" id="fecha"></td>
           </tr>
           <tr><td colspan="2"> <input type="submit" name="enviando" value="Cargar">
        </td></tr></table>
        </form>
    
    </body>
    
</html>
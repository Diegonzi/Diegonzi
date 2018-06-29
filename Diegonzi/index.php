<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
    <title>Diegonzi</title>
    <link rel="stylesheet" href="estilos.css"/>
    <script src="jquery.js"></script>
    <script></script>
  </head>
  <body>

  <?php

    session_start();
    
    if(isset($_SESSION["usuario"])){

      echo "hola";

    }

  ?>

    <header>
      <h1 id="Diegonzi">Diegonzi</h1>      
      <nav class="bNavegacion">
        <ul class="menuPrincipal">
          <li><a href="#">Inicio</span<i class="icon"></i></a>
           <ul class="subMenu">
                        <li><a href="#">Comida</a></li>
                        <li><a href="#">Jueguetes</a></li>
                        <li><a href="#">Ropa</a></li>                        
                      </ul> </li>
          <li><a href="#">Comida</span<i class="icon"></i></a>
          <ul class="subMenu">
                        <li><a href="#">Cachorro</a></li>
                        <li><a href="#">Joven</a></li>
                        <li><a href="#">Adulto</a></li>                        
                      </ul>
                      </li>
          <li><a href="#">Ropa</a>
           <ul class="subMenu">
                        <li><a href="#">Gatos</a></li>
                        <li><a href="#">Perros</a></li>                        
                      </ul> </li>
          <li><a href="#">Jueguetes</a>
           <ul class="subMenu">
                        <li><a href="#">Masticables</a></li>
                        <li><a href="#">Estructuras</a></li>
                        <li><a href="#">Otros</a></li>                        
                      </ul> </li>          
          <li id="contacto"><a href="#">Contacto</a>          
           <ul class="subMenu">               
                      </ul> </li>



          <div id="buscador">                      
             <form action="index.php" method="get">            
              <tr><td></td> <td><input type="text" name="buscar"></td></tr> 
              <tr><td ><input type="submit" name= "enviando" value="Buscar"> </td></tr>
              </form>
           </div>

        </ul>
      </nav>
    </header>
      <section id="contenido">
        <figure>
          <img src="mascota.png" alt="mascota">
        </figure>

      </section>
      <!-- <script>
        function aviso() {alert("Diegonzi");}
        var imagenes=document.querySelectorAll("#contenido img");
        for(var i=0;i<imagenes.length;i++){
          imagenes[i].style.visibility="hidden";
        }

      </script> -->
      <footer id="pie">
        <small>Bolivar 414, Tigre</small>
        <small id="pieD">Diegonzi</small>
      </footer>

      <a href="formulario_login.php">Ingresar</a> <a href="cierre.php">Cerrar Sesion</a>
      
  </body>
</html>

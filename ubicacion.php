<?php
session_start();
error_reporting(0);
$usuario = $_SESSION['nombre'];
$id = $_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <title>PRACTICA 1</title>
</head>

    

<body>
  <header>
    <nav>
      <center><h1 style="padding-top: 2rem; color: #FFFFFF;">Ubicación</h1></center>
      <ul>
        <?php if($usuario==null){
          echo"<li><a href = 'index.php'>Home</a> </li>";
          }else{
            echo"<li><a href = 'index.php'>$usuario</a> </li>";
            echo
            "<form action=\"http://www.webdav.arteydiseno.com\" method=\"POST\">
              <input type=\"text\" hidden=true name=\"user_id\" value=\"" . $id . "\">
              <input type=\"text\" hidden=true name=\"user_name\" value=\"" . $usuario . "\">
              <button style=\"height:1rem;width:10rem\" type=\"submit\">Compras</button>
            </form>";
          }
          ?>
        <li><a href = "productos.php">Productos</a> </li>
        <li><a href = "ubicacion.php">Ubicación</a> </li>
        <?php if($usuario==null){
          echo"<li><a href = 'ingreso.php'>Inicio de sesión</a> </li>";
          }else{
            echo"<li><a href = 'cerrarsesion.php'>Cerrar sesion</a> </li>";
          }
          ?>
      </ul>
    </nav>
  </header>
  
  <center>
    <section id="ubicacion">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d785.0171663846547!2d-103.24747305892186!3d20.62102941230514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428b48b8b34aa25%3A0x8efeec80dd5683e1!2sMatamoros!5e0!3m2!1sen!2smx!4v1676983340064!5m2!1sen!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </section>
  </center>

  <footer>
    <h1>Por: Julio Manuel González Ramírez</h1>
    <div id="redescontenedor">
      <h2>Redes Sociales:</h2>
      <div id="redes">
        <a class="red" href="https://www.facebook.com/"><img class="logoredes" src="imagenes/facebook.png" alt="facebook"></a>
        <a class="red" href="https://www.instagram.com/"><img class="logoredes" src="imagenes/instagram.png" alt="instagram"></a>
        <a class="red" href="https://www.twitter.com/"><img class="logoredes" src="imagenes/twitter.png" alt="twitter"></a>
      </div>

    </div>
  </footer>
</body>
</html>
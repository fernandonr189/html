<?php
session_start();
error_reporting(0);
$usuario = $_SESSION['nombre'];
?>
<!DOCTYPE html>
<html lang="es">
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
      <center><h1 style="padding-top: 2rem; color: #FFFFFF;">Inicio de sesión</h1></center>
      <ul>
        <?php if($usuario==null){
            echo"<li><a href = 'index.php'>Home</a> </li>";
            }else{
              echo"<li><a href = 'index.php'>$usuario</a> </li>";
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
    <form method = "POST" action = login.php>
      <div class = "formulario"> 
        <label>Correo</label>
        <input type = "email" id="email" name="email">
        <label>Contraseña</label>
        <input type = "password" id="contrasena" name="contrasena"> 
      </div>
      <button type="submit" name="login" value="login">Iniciar sesion</button>
    </form>
    <p>¿Aún no tienes una cuenta?</p>
    <a id="registro" href = "registro.html">Registrate</a>
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
<?php
    include 'conectar.php';
    $ID=$_GET['id'];
    $sql="SELECT * FROM administradores where ID = '$ID';";
    $resultado = mysqli_query($con, $sql);
    $mostrar = mysqli_fetch_array($resultado)
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
      <ul>
        <li><a href = "Admin_home.php">Home</a> </li>
        <li><a href = "index.php">Cerrar sesion</a> </li>
      </ul>
    </nav>
  </header>
  
  <center>
    <form class = "formulario" action = "proceso_editar_administradores.php" method = "POST">
        <p>Id:</p>
        <input type="text" value="<?php echo $mostrar['ID']?>" name="id"readonly>
        <p>Nombre:</p>
        <input type="text" value="<?php echo $mostrar['NOMBRE']?>" name="nombre">
        <p>Correo:</p>
        <input type="email" value="<?php echo $mostrar['CORREO']?>" name="correo">
        <p>Contraseña:</p>
        <input type="text" value="<?php echo $mostrar['CONTRASENA']?>" name="contrasena">
        <input id="btnactualizar" type="submit" value="Actualizar">
        <a id="btncancelar" href = "Admin_usuarios.php">Cancelar</a>
    </form>
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

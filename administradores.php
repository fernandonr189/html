<?php
    include 'conectar.php';
    $sql="SELECT * FROM administradores;";
    $resultado = mysqli_query($con, $sql);
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
  <a id="btnagregar" href = "agregar_administradores.php">Agregar Administrador</a>
</center>
  <center>
  <table>
    <thead>
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Contraseña</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>

    <?php while($mostrar = mysqli_fetch_array($resultado)){ ?>
      <tr>
        <td><?php echo $mostrar['ID'] ?></td>
        <td><?php echo $mostrar['NOMBRE']; ?></td>
        <td><?php echo $mostrar['CORREO']; ?></td>
        <td><?php echo $mostrar['CONTRASENA']; ?></td>
        <td>
          <a id="btneditar" href = "editar_administradores.php?id=<?php echo $mostrar['ID']?>">Editar</a>
          <form action="eliminar_administradores.php" method = "post"> <input type="hidden" value="<?php echo $mostrar['ID'] ?>" name="txtID"readonly>
          <input type="submit" value ="Eliminar" id="btnEliminar" name="btnEliminar"></td></form>
      </tr>
      <?php } ?>
    </tbody>
  </table>
  <br>
  <br>
  <a id="btncancelar" href = "Admin_usuarios.php">Cancelar</a>
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

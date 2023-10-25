<?php
    include 'conectar.php';
    error_reporting(0);
    session_start();
    $usuario = $_SESSION['nombre'];
    $idUsuario = $_SESSION['id'];
    $sql="SELECT * FROM carrito WHERE ID_USUARIO = $idUsuario;";
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
  <table>
    <thead>
      <tr>
        <th>Cantidad</th>
        <th>Producto</th>
        <th>Descripción</th>
        <th>Precio</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>

    <?php while($mostrar = mysqli_fetch_array($resultado)){ ?>
      <tr>
        <td><?php echo $mostrar['CANTIDAD']; ?></td>
        <td><?php echo $mostrar['NOMBRE']; ?></td>
        <td><?php echo $mostrar['DESCRIPCION']; ?></td>
        <td><?php echo $mostrar['PRECIO']; ?></td>
        <td>
          <form action="eliminar_carrito.php" method = "post"> <input type="hidden" value="<?php echo $mostrar['ID'] ?>" name="txtID"readonly>
          <input type="submit" value ="Eliminar" id="btnEliminar" name="btnEliminar"></td></form>
        </td>
      </tr>
      <?php 
        @$count++;
        $subtotal = $mostrar['PRECIO'] * $mostrar['CANTIDAD'];
        @$total = $total + $subtotal;
        } 
        if($count > 0){
            ?>
            <tr>
            <td></td>
            <td></td>
            <td></td>
            <td><?php echo"total: $$total";?></td>
            <td>
                <div class="botones">
                <form method="POST" action="compra.php">
                    <button type="submit" name="Confirmar" class="button">Confirmar Compra</button>
                    <input type="hidden" id="total" name="total" value="<?php echo $total?>">
                </form>
                </div>
            </td>
        </tr>
        <?php
        }
        ?>    
    </table>
    </tbody>
  </table>
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



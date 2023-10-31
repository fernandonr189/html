<?php
    session_start();
    error_reporting(0);
    $usuario = $_SESSION['nombre'];
    $id = $_SESSION['id'];
    include 'conectar.php';
    $sql="SELECT * FROM productos;";
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
      <center><h1 style="padding-top: 2rem; color: #FFFFFF;">Productos</h1></center>
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


  <div id="productos">
    <?php while($mostrar = mysqli_fetch_array($resultado)){?>
      <div class="producto">
        <div class="nombre_producto"><h3><?php echo $mostrar['NOMBRE']; ?></h3></div>
        <div class= "imagen_producto"><img class="cuadros" height="200em" width="auto" src="data:image/jpg;base64,<?php echo base64_encode($mostrar['IMAGEN'])?>" alt=""></div>
        <div class="descripcion_producto"><?php echo $mostrar['DESCRIPCION'];?></div>
        
        <?php if($usuario==null){
            echo"";
            }else{
              echo'<div>
                  <form method="post" action="agregar_carrito.php?idproducto=' . $mostrar['ID'] . '">
                      <button type="submit" name="kart" class="carrobtn">
                          <input class="carrito" type="image" src="imagenes/carrito.png">
                      </button>
                      <input class="number" type="number" id="number" name="number" min="0">
                  </form>
              </div>';
            }
            ?>
        
      </div>
        <?php } ?>
  </div>




  <!------------------
  <table>
    <thead>
      <tr>
        <th>Producto</th>
        <th>Descripción</th>
        <th>Precio</th>
        <th>Imagen</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Cuadro decorativo con trabajo de cristal</td>
        <td>Medidas: 180x80cm<br>Material: Madera y vidrio</td>
        <td>$2000</td>
        <td><img src="imagenes/cuadro1.jpg" alt="Cuadro decorativo 1" height="200em" width="auto"></td>
      </tr>
      <tr>
        <td>Cuadro de la última cena con trabajo de cristal</td>
        <td>Medidas: 150x90cm<br>Material: Madera y vidrio</td>
        <td>$1900</td>
        <td><img src="imagenes/cuadro2.jpg" alt="Cuadro decorativo 2" height="200em" width="auto"></td>
      </tr>
      <tr>
        <td>Cuadro de la virgen de guadalupe con trabajo de cristal</td>
        <td>Medidas: 115x85cm<br>Material: Madera y vidrio</td>
        <td>$1900</td>
        <td><img src="imagenes/cuadro3.jpg" alt="Cuadro decorativo 3" height="200em" width="auto"></td>
      </tr>
      <tr>
        <td>Cuadro pintado al óleo</td>
        <td>Medidas: 250xcm<br>Material: Lienzo y madera<br>Diseño: Elefantes</td>
        <td>$3000</td>
        <td><img src="imagenes/cuadro4.jpg" alt="Cuadro decorativo 4" height="200em" width="auto"></td>
      </tr>
    </tbody>
  </table>
</center>
----------->
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

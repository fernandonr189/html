<?php
session_start();
error_reporting(0);
$usuario = $_SESSION['nombre'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title>Cuadros y pinturas, Arte y diseño | Pagina Oficial</title>
    <link rel="stylesheet" href="css/indexestilos.css">
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
    <center>
    <img id="logo" src="imagenes/logo.png" alt="mision">
  </center>
  </header>




  <section class="info">
    <div class="imagen">
      <img src="imagenes/mision.png" alt="mision" height="200rem" width="auto">
    </div>
    <div class="texto">
    <h2>Misión</h2><br>
      <h3>Nuestra misión es ofrecer a nuestros clientes una amplia gama de cuadros decorativos personalizados y de alta calidad, utilizando<br>
        materiales de primera calidad y tecnología de punta en la producción. Nos esforzamos por ser líderes en innovación y diseño, brindando<br>
        una experiencia excepcional al cliente a través de un servicio amable y eficiente, con el objetivo de superar siempre sus expectativas.<br>
      </h3>
    </div>
  </section>

  <section class="info">
    <div class="imagen">
      <img src="imagenes/vision.png" alt="vision" height="200rem" width="auto">
    </div>
    <div class="texto">
      <h2>Visión</h2><br>
      <h3>Ser reconocidos como la marca líder de Tonalá en la fabricación de cuadros decorativos de alta calidad, innovadores y a precios accesibles,<br>
        brindando siempre un excelente servicio al cliente.<br>
      </h3>
    </div>
    </section>

    <section class="info">
      <div class="imagen">
        <img  src="imagenes/productos.jpg" alt="productos" height="200rem" width="auto">
      </div>
      <div class="texto">
      <h2>Productos</h2><br>
      <h3 style="text-align: left;">En arte y diseño contamos con cierta gama de opciones para intentar satisfacer las necesidades y gustos de nuestros clientes<br>
        <br>
        <i>1. Cuadro decorativo con trabajo de cristal:</i> Los colores de este tipo de cuadro son en su totalidad personalizables, ademas de que manejamos dos tamaños<br>
        <br>
        <i>2. Cuadro de la última cena con trabajo de cristal:</i> Los colores de este tipo de cuadro son personalizables en la parte del marco y de la cristaleria,
        ademas de que manejamos dos tamaños<br>
        <br>
        <i>3. Cuadro de la virgen de guadalupe con trabajo de cristal:</i> Los colores de este tipo de cuadro son personalizables en la parte del marco y de la cristaleria,
        ademas de que manejamos dos tamaños<br>
        <br>
        <i>4. Cuadro pintado al oleo:</i> Este cuadro es en su totalidad personalizable por el cliente, puede cotizar la imagen que desee, en el tamaño que desee
        <br>
      </h3>
    </div>
  </section>




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
<?php
error_reporting(1);
include 'conectar.php';

$NOMBRE = $_POST['nombre'];
$DESCRIPCION = $_POST['descripcion'];
$IMAGEN = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));


mysqli_query($con, "INSERT INTO productos (ID, NOMBRE, DESCRIPCION, IMAGEN, PRECIO) VALUES (0, '$NOMBRE', '$DESCRIPCION', '$IMAGEN', 5000);");
header("location: Admin_productos.php");
?>

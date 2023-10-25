<?php
error_reporting(1);
include 'conectar.php';

$ID=$_POST['id'];
$NOMBRE = $_POST['nombre'];
$DESCRIPCION = $_POST['descripcion'];
$IMAGEN = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));


mysqli_query($con, "UPDATE productos SET NOMBRE = '$NOMBRE', DESCRIPCION = '$DESCRIPCION', IMAGEN = '$IMAGEN' WHERE ID = $ID");
header("location: Admin_productos.php");
?>

<?php
error_reporting(1);
include 'conectar.php';

$ID=$_POST['id'];
$NOMBRE = $_POST['nombre'];
$CORREO = $_POST['correo'];
$CONTRASENA = $_POST['contrasena'];


mysqli_query($con, "UPDATE administradores SET NOMBRE = '$NOMBRE', CORREO = '$CORREO', CONTRASENA = '$CONTRASENA' WHERE ID = $ID");
header("location: administradores.php");
?>

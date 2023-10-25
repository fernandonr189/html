<?php
error_reporting(1);
include 'conectar.php';

$ID=$_POST['id'];
$NOMBRE = $_POST['nombre'];
$EDAD = $_POST['edad'];
$CORREO = $_POST['correo'];
$CONTRASENA = $_POST['contrasena'];


mysqli_query($con, "UPDATE usuarios SET NOMBRE = '$NOMBRE', EDAD = '$EDAD', CORREO = '$CORREO', CONTRASENA = '$CONTRASENA' WHERE ID = $ID");
header("location: Admin_usuarios.php");
?>

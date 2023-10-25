<?php
include 'conectar.php';

$email = $_POST['email'];
$contrasena = $_POST['contrasena'];


$resultado=mysqli_query($con, "SELECT * FROM usuarios WHERE CORREO = '$email' AND CONTRASENA = '$contrasena';");
$resultadoadmin=mysqli_query($con, "SELECT * FROM administradores WHERE CORREO = '$email' AND CONTRASENA = '$contrasena';");

if (mysqli_num_rows($resultado) == 1)
{
    $usuario = mysqli_fetch_assoc($resultado);
    session_start();
    $_SESSION['id'] = $usuario['ID'];
    $_SESSION['nombre'] = $usuario['NOMBRE'];
    $_SESSION['correo'] = $usuario['CORREO'];
    header("location: productos.php");
    
}
else if(mysqli_num_rows($resultadoadmin)>=1)
{
    echo "Ingresaste administrador";
    header("location: Admin_home.php");
}else{
    echo "<h1>Correo o contraseña incorrectos</h1>";
}
?>

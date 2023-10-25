<?php
include 'conectar.php';
$nombre= $_POST['nombre'];
$edad= $_POST['edad'];
$email= $_POST['email'];
$pass=$_POST['contrasena'];


$resultado=mysqli_query($con, "SELECT * FROM usuarios WHERE CORREO = '$email';");

if (mysqli_num_rows($resultado) == 1)
{
    echo "El correo ya ha sido registrado con una cuenta";
}
else
{
    $sql= mysqli_query($con,"INSERT INTO usuarios (ID, NOMBRE, CONTRASENA, EDAD, CORREO) VALUES (0, '$nombre', '$pass', '$edad', '$email')");
    if($sql){
        header("location: ingreso.php");
    }else{
        echo"usuario no agregado";
    }
}















?>

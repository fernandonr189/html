<?php
include 'conectar.php';
$nombre= $_POST['nombre'];
$email= $_POST['email'];
$pass=$_POST['contrasena'];


$resultado=mysqli_query($con, "SELECT * FROM administradores WHERE CORREO = '$email';");

if (mysqli_num_rows($resultado) == 1)
{
    echo "El correo ya ha sido registrado con una cuenta";
}
else
{
    $sql= mysqli_query($con,"INSERT INTO administradores (ID, NOMBRE, CONTRASENA, CORREO) VALUES (0, '$nombre', '$pass', '$email')");
    if($sql){
        header("location: administradores.php");
    }else{
        echo"usuario no agregado";
    }
}

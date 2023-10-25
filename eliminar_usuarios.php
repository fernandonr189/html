<?php
include 'conectar.php';

$ID = $_POST['txtID'];
mysqli_query($con, "DELETE FROM usuarios WHERE ID = '$ID';");

header("location: Admin_usuarios.php");


?>

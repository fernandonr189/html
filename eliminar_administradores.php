<?php
include 'conectar.php';

$ID = $_POST['txtID'];
mysqli_query($con, "DELETE FROM administradores WHERE ID = '$ID';");

header("location: administradores.php");


?>

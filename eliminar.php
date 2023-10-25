<?php
include 'conectar.php';

$ID = $_POST['txtID'];
mysqli_query($con, "DELETE FROM productos WHERE ID = '$ID';");

header("location: Admin_productos.php");


?>

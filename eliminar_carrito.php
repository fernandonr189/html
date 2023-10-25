<?php
include 'conectar.php';

$ID = $_POST['txtID'];
mysqli_query($con, "DELETE FROM carrito WHERE ID = '$ID';");

header("location: carrito.php");


?>

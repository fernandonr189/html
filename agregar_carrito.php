<?php
session_start();
include 'conectar.php';
$idProducto = $_GET['idproducto'];
$idUsuario = $_SESSION['id'];
$cantidad = $_POST['number'];
if($cantidad <= 0){
    header("location: productos.php");
}
else{
    $SqlProducto = mysqli_query($con, "SELECT * FROM productos WHERE ID = '$idProducto'");
    if($Producto = mysqli_fetch_assoc($SqlProducto)){
        $imagenProducto = $Producto['IMAGEN'];
        $nombreProducto = $Producto['NOMBRE'];
        $descripcionProducto = $Producto['DESCRIPCION'];
        $precioProducto = $Producto['PRECIO'];
        $SqlRepeat = mysqli_query($con, "SELECT * FROM carrito WHERE ID_PRODUCTO = '$idProducto' AND ID_USUARIO = '$idUsuario' AND NOMBRE = '$nombreProducto'");
        if($Repeat = mysqli_fetch_assoc($SqlRepeat)){
            $cantidad = $cantidad + $Repeat['CANTIDAD'];
            $precioTotal = $precioProducto;
            $idrepeat = $Repeat['ID'];
            $SqlUpdate = mysqli_query($con, "UPDATE carrito SET CANTIDAD = '$cantidad', PRECIO = '$precioTotal' WHERE ID = '$idrepeat'");
            header("location: carrito.php");
        }
        else{
            $Sql = mysqli_query($con,"INSERT INTO carrito (ID, ID_USUARIO, ID_PRODUCTO, NOMBRE, DESCRIPCION, PRECIO, CANTIDAD) values (0,'$idUsuario','$idProducto','$nombreProducto','$descripcionProducto','$precioProducto','$cantidad')");
            header("location: carrito.php");
        }
    }
}

?>

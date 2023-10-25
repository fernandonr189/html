<?php
session_start();
$usuario = $_SESSION['nombre'];

if($usuario==null){
    echo"No se puede cerrar sesion";
    }else{
      session_destroy();
      header("location: index.php");
    }

?>
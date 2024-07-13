<?php 
include 'app/conecta.php';
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $Nombre = $_POST['nombre'];
    $Precio = $_POST['precio'];

    echo "El nombre del producto es: ".$Nombre." El precio es: ".$Precio;


}



?>
<?php 
    include 'Conecta.php';
    // generar la consulta para extraer los datos de facturas 
    $Facturas = "SELECT * FROM facturas ORDER BY cliente ASC";
    $EFacturas = $Connecta->query($Facturas);
    // generar la consulta para extraer los datos de productos 
    $Productos = "SELECT * FROM productos ORDER BY descripcion ASC";
    $EProductos = $Connecta->query($Productos);


?>
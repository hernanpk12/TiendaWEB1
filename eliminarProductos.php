<?php

include("basedatos.php");

$id=$_GET["id"];
$transaccion = new basedatos();

$consultaSQL="DELETE FROM productos WHERE idProducto='$id'";

$transaccion->eliminarProductos($consultaSQL);
header("location:listaProductos.php");
?>
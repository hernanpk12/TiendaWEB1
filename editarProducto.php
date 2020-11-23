<?php

include("basedatos.php");
if(isset($_POST["botonEditar"])){
    $producto=$_POST["productoEditar"];
    $marca=$_POST["marcaEditar"];
    $precio=$_POST["precioEditar"];
    $descripcion=$_POST["DescripcionEditar"];

    $id=$_GET["id"];

    $transaccion = new basedatos();

    $consultaSQL="UPDATE productos SET productos='$producto',marca='$marca',precio='$precio',descripcion='$descripcion' WHERE idProducto='$id'";
    $transaccion->editarProductos($consultaSQL);
    header("location:listaProductos.php");
}

?>
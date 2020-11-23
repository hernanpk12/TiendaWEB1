<?php


include("basedatos.php");

if(isset($_POST["envio"])){
    $productos =$_POST["producto"];
    $marca =$_POST["marca"];
    $imagen=$_POST["imagen"];
    $precio=$_POST["precio"];
    $descripcion =$_POST["descripcion"];

   $transaccion = new basedatos();
   

   $consultaSQL="INSERT INTO productos ( productos, marca, imagen,precio, descripcion) VALUES ('$productos','$marca','$imagen','$precio','$descripcion')";
   $transaccion->agregarProductos($consultaSQL);
   
   



    



}


?>
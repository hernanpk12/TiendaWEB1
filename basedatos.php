<?php

class basedatos{
     public $usuarioBD = "root";
     public $passwordBD = "";

     public function __construct(){}

     public function conectarBD(){
   
        try{
            $infoBD ="mysql:host=localhost;dbname=tiendaweb";
            $conexionBD = new PDO($infoBD,$this->usuarioBD,$this->passwordBD);
            return($conexionBD);

        }
        catch(PDOException $error){
            echo($error->getMessage());

        }

      
     }
     public function agregarProductos($consultaSQL){

        $conexionBD=$this->conectarBD();
        $consultaAgregarProducto=$conexionBD->prepare($consultaSQL);
        $resultado=$consultaAgregarProducto->execute();
        if($resultado){
            echo("exito al agregar datos");

        }else{
            echo("error agregando el registro");
        }

     }

     public function buscarProductos($consultaSQL){
         $conexionBD=$this->conectarBD();
         $consultaBuscarProductos=$conexionBD->prepare($consultaSQL);
         $consultaBuscarProductos->setFetchMode(PDO::FETCH_ASSOC);
         $consultaBuscarProductos->execute();
         return($consultaBuscarProductos->fetchALL());
     }

     public function eliminarProductos($consultaSQL){
        $conexionBD=$this->conectarBD();
        $consultaEliminarProductos=$conexionBD->prepare($consultaSQL);
        $resultado=$consultaEliminarProductos->execute();
        if($resultado){
            echo("exito al eliminar el producto");

        }else{
            echo("error al eliminar el producto");
        }
     }

     public function editarProductos($consultaSQL){
        $conexionBD=$this->conectarBD();
        $consultaEditarProductos=$conexionBD->prepare($consultaSQL);
        $resultado=$consultaEditarProductos->execute();
        if($resultado){
            echo("exito al editar datos");

        }else{
            echo("error al editar el registro");
        }

     }



    


}




?>
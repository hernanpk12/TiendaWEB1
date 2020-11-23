<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<?php
include("basedatos.php");
$consultaSQL="SELECT * FROM productos WHERE 1";

$transaccion = new basedatos();
$productos = $transaccion->buscarProductos($consultaSQL);

?>
 <nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <a class="navbar-brand" href="#"> <b>LISTA DE PRODUCTOS</b> </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
       </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="formularioProductos.php">Registro de Productos<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="listaProductos.php">Lista de Productos</a>
      </li>
     
    </ul>
           <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Buscar</button>
         </form>
  </div>
</nav>
<nav >
<div class="container">
  <div class="row row-cols-1 row-cols-md-3">
    <?php foreach($productos as $producto):?>
      <div class="col mb-4">
           <div class="card h-100">
              <img src="<?php echo($producto["imagen"]) ?>" class="card-img-top" alt="imagen">
             <div class="card-body">
             <h5 class="card-title"><?php echo($producto["productos"])?> </h5>
             <p class="card-text"><?php echo($producto["marca"])?></p>
             <p class="card-text"><?php echo($producto["precio"])?></p>
             <p class="card-text"><?php echo($producto["descripcion"])?></p>
             <a href="eliminarProductos.php?id=<?php echo($producto["idProducto"]) ?>" class="btn btn-primary" >Eliminar</a>
             <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editar<?php echo($producto["idProducto"]) ?>">
               Editar
             </button>
           </div>
           <div class="modal fade" id="editar<?php echo($producto["idProducto"]) ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editando productos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="editarProducto.php?id=<?php echo($producto["idProducto"]) ?>" method="POST">
                    <div class="form-group">
                         <label>Producto</label>
                         <input type="text" class="form-control" name="productoEditar" value="<?php echo($producto["productos"])?>">
                    </div>
                    <div class="form-group">
                         <label>Marca</label>
                         <input type="text" class="form-control" name="marcaEditar" value="<?php echo($producto["marca"])?>">
                    </div>
                    <div class="form-group">
                         <label>Precio</label>
                         <input type="text" class="form-control" name="precioEditar" value="<?php echo($producto["precio"])?>">
                    </div>
                    <div class="form-group">
                         <label>Descripcion</label>
                         <input type="text" class="form-control" name="DescripcionEditar" value="<?php echo($producto["descripcion"])?>">
                    </div>
                    <button type="submit" class="btn btn-info" name="botonEditar">Editar</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>
       </div>
    <?php endforeach?>
 </div>
</div>
</nav>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>      
</body>

</html>
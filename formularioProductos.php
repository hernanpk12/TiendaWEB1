<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
     <header>
        <h1 align="center">ADMINISTRACION DE PRODUCTOS</h1>
        <hr>
     </header>

     <main>
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="Container">
        <form action="" style="margin-top: 10px;">
          <a href="formularioProductos.php" class="btn btn-info" title="click para ir a registro" target= "_blank">Registro de Productos</a>
          <a href="listaProductos.php" class="btn btn-info"  title="click para ir a la lista de productos" target= "_blank">lista de Productos</a>
       </form>
        </div>
       </nav>
           <form action="registroProductos.php" method="POST">
             <h1>Registro de productos</h1>
              <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Nombre de Producto" name="producto">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Marca de Producto" name="marca">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label class="font-weight-bold">Imagen Producto</label>
                        <input type="text" class="form-control" placeholder="Foto URL" name="imagen">
                    </div>
                </div>
                <div class="row mt-3">
                  <div class="col-6"> 
                    <input type="text" class="form-control" placeholder="Precio del Producto" name="precio">
                  </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label class="font-weight-bold">Descripción:</label>
                        <textarea class="form-control" rows="4" name="descripcion"></textarea>
                    </div>
                </div>
                <div class="row mt-3">
                   <div class="col"> 
                      <button type="submit" class="btn btn-info btn-block" name="envio">Registrar Producto</button>
                   </div> 
                </div>
           </form>
        </div>
     </main>





<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>  
</body>
</html>
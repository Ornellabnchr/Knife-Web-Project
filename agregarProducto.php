



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Producto</title>

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>
<?php
include "headerSesion.php";
?>

<main>

    <div class="container">
        <form action="guardarP.php" method="POST">
        <div class="form-row">
        <div class="form-group col-12">
            <label for="inputName">Descripcion</label>
            <input type="text" name="descripcion" class="form-control" id="descripcion" placeholder="descripcion" required>
        </div>
        <div class="form-group col-12">
            <label for="inputName">Precio</label>
            <input type="text" name="precio" class="form-control" id="precio" placeholder="precio">
        </div>

        <div class="form-group col-md-6">
            <label for="inputEmail4">Stock</label>
            <input type="text" name="stock" class="form-control" id="stock" placeholder="stock">
            </div>
           
    

        <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
 
        
</form>
</main>
<script src="register.js"></script>
<?php
include "footer.php";
?>
</body>
</html>



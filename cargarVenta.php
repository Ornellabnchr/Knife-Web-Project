



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
        <form action="guardarV.php" method="POST">
        <div class="form-row">
        <div class="form-group col-12">
            <label for="inputName">Fecha</label>
            <input type="date" name="fecha" class="form-control" id="inputName" placeholder="fecha" required>
        </div>
        <div class="form-group col-12">
            <label for="inputName">ID CLIENTE</label>
            <input type="text" name="id" class="form-control" id="inputSecondName" placeholder="id cliente">
        </div>

     
            <div class="form-group col-md-6">
            <label for="inputEmail4">ID PRODUCTO</label>
            <input type="text" name="id_p" class="form-control" id="inputEmail4" placeholder="id producto">
            </div>
    
            <div class="form-group col-md-6">
            <label for="inputEmail4">CANTIDAD</label>
            <input type="text" name="cantidad" class="form-control" id="inputEmail4" placeholder="cantidad">
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

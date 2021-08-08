



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>
<?php
include "header.php";
?>

<main>

    <div class="container">
        <form action="guardarCompra.php" method="POST">
        <div class="form-row">
        <div class="form-group col-12">
            <label for="inputName">Fecha</label>
            <input type="text" name="fecha" class="form-control" id="inputName" placeholder="nombre" required>
        </div>
        <div class="form-group col-12">
            <label for="inputName">Id Cliente</label>
            <input type="text" name="id" class="form-control" id="inputSecondName" placeholder="nombre">
        </div>

        <div class="form-group col-md-6">
            <label for="inputEmail4">Id Producto</label>
            <input type="text" name="id_p" class="form-control" id="inputEmail4">
            </div>
            <div class="form-group col-md-6">
            <label for="inputName">Cantidad</label>
            <input type="text" name="cantidad" class="form-control" id="inputSecondName" placeholder="nombre">
        
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
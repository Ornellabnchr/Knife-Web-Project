



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Propietario</title>

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>
<?php
include "headerSesion.php";
?>

<main>

    <div class="container">
        <form action="guardarPro.php" method="POST">
        <div class="form-row">
        <div class="form-group col-12">
            <label for="inputName">Nombre</label>
            <input type="text" name="nombre" class="form-control" id="inputName" placeholder="nombre" required>
        </div>
        <div class="form-group col-12">
            <label for="inputName">Apellido</label>
            <input type="text" name="apellido" class="form-control" id="inputSecondName" placeholder="apellido">
        </div>

        <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="email">
            </div>
            <div class="form-group col-md-6">
            <label for="inputEmail4">Password</label>
            <input type="password" name="password" class="form-control" id="inputEmail4" placeholder="password">
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
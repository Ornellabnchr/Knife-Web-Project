



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
        <form action="guardar.php" method="POST">
        <div class="form-row">
        <div class="form-group col-12">
            <label for="inputName">Nombre</label>
            <input type="text" name="nombre" class="form-control" id="inputName" placeholder="nombre" required>
        </div>
        <div class="form-group col-12">
            <label for="inputName">Apellido</label>
            <input type="text" name="apellido" class="form-control" id="inputSecondName" placeholder="nombre">
        </div>

        <div class="form-group col-md-6">
            <label for="inputEmail4">D.N.I</label>
            <input type="text" name="dni" class="form-control" id="inputEmail4">
            </div>
            <div class="form-group col-md-6">
            <label for="inputName">Username</label>
            <input type="text" name="username" class="form-control" id="inputSecondName" placeholder="nombre">
        
            </div>


            <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" name="email" class="form-control" id="inputEmail4">
            </div>
            <div class="form-group col-md-6">
            <label for="inputPassword4">Password</label>
            <input type="password" name="password" class="form-control" id="inputPassword4">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Direccion</label>
            <input type="text" name="direccion" class="form-control" id="inputDireccion" placeholder="1234 Main St">
        </div>
        <div class="form-group">
            <label for="inputAddress">City</label>
            <input type="text" name="city" class="form-control" id="inputCity" placeholder="1234 Main St">
        </div>
        <div class="form-group">
            <label for="inputAddress">State</label>
            <input type="text" name="state" class="form-control" id="inputState" placeholder="1234 Main St">
        </div>
        <div class="form-group">
            <label for="inputAddress">zip</label>
            <input type="text" name="zip" class="form-control" id="inputZip" placeholder="1234 Main St">
        </div>
        
        <div class="form-group">
            <label for="inputAddress">Telefono</label>
            <input type="text" name="telefono" class="form-control" id="inputTel" placeholder="1234 Main St">
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



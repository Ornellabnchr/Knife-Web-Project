<?php

require 'conexion.php';

$id_p = $_GET['id'];

$sql = "SELECT * FROM productos WHERE id_p= '$id_p'";

$resultado = mysqli_query($conectar, $sql);

$row = mysqli_fetch_array($resultado);

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>modificar</title>
  </head>
  <body>
      
    <?php
include "headerSesion.php";
    ?>
  

<main>

    <a class="nav-link" href="datosPro.php">Mis Datos</a>

<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="productos.php">Productos</a>
  </li>

  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="manipularUsuarios.php"> Clientes </a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="compras.php">Ventas</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="pagPropietario.php">Inicio</a>
  </li>
  
</ul>

     <form action="actualizarP.php" method="POST">
        <div class="form-row">
        <div class="form-group col-12">
            <label for="inputName">Descripcion</label>
            <input type="text" name="descripcion" value="<?php echo $row['descripcion'];?>"  class="form-control" id="descripcion" placeholder="descripcion" required>
        </div>
        <div class="form-group col-12">
            <label for="inputName">Precio</label>
            <input type="text" name="precio" value="<?php echo $row['precio'];?>" class="form-control" id="precio" placeholder="precio">
        </div>

        <div class="form-group col-md-6">
            <label for="inputEmail4">stock</label>
            <input type="text" name="stock" value="<?php echo $row['stock'];?>"class="form-control" id="stock">
            </div>

            <input type="hidden" id="id_p" name="id_p" value="<?php echo $row['id_p'];?>" >

  
        <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
  
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>




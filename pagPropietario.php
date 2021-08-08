<?php

session_start();
if (isset($_SESSION['conectado']) && $_SESSION['conectado'] == true) {
echo "Bienvenido! " . $_SESSION['email'];

} else {
echo "Esta pagina es solo para usuarios registrados.<br>";
exit;
}
$now = time();
if($now > $_SESSION['expira']) {
session_destroy();
echo "Su sesion a terminado">
exit;
}

?>

<meta charset=""
<meta char="UTF-8">
meta charset="UTF-8">
<charset="UTF-8>
  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Knife</title>

    <style>
        #cerrar{
            margin-left: 90%;
            width: 9%;
        }
        </style>
  </head>
<body>

<?php
include "headerSesion.php";
?>

<main>

    <a class="nav-link" href="manipDatosProp.php">Mis Datos</a>

<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="productos.php">Productos</a>
  </li>
  <a class="nav-link" href="agregarProducto.php">Agregar Producto</a>
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="manipularUsuarios.php"> Clientes </a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="ventas.php">Ventas</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="pagPropietario.php">Inicio</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="nuevopropietario.php">Nuevo Propietario</a>
  </li>
</ul>






</main>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<?php
include "footer.php";
?>

</body>
</html>


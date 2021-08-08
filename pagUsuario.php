
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesion</title>
</head>
<body>
<?php
include "headerSesion.php";
?>
<main>
<nav class="navbar navbar-dark bg-light">
  <div class="container-fluid">
      <a class="navbar-brand" href="market.php">    <h5 class="text-uppercase">🛒</h5></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page"  href="cualmodifico.php">Datos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cargarVenta.php">Cargar Compra</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="listarVentaU.php">Listar Compras</a>
        </li>
        
    </ul>
    </div>
  </div>
</nav>
</main>
<?php
include "footer.php";
?>
</body>
</html>



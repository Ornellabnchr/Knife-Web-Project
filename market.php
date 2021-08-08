
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market</title>

        <!-- Place favicon.ico in the root directory -->

   
        
    <style>
        .card-body{
        margin:0;
        }
        .card-img, .card-img-bottom, .card-img-top{
            margin:0;
        }
        .carousel-item{
            border: none;
            margin:0;
            background-color: black;
        }
       
      
        </style>
          <script src="modernizr-2.8.3.min.js"></script>
</head>
<body>
<?php
include "header.php";
?>
<main>
<section class="seccion contenedor">
            <form id="registro" class="registro" action="productos.html" method="post">
<div class="card"   style="width: 18rem;">
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner" >
    <div class="carousel-item active"  >
      <img src="img/ts.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/ts2.jpg" class="d-block w-100" alt="...">
    </div>

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  <div class="card-body" >
    <h5 class="card-title" >Knife T-shirt</h5>
    <p class="card-text">$15</p>
  
    <div class="orden">
        <label for="pase_dia">Add:</label>
             <input type="number" min="0" id="cant_rem1" size="3" name="boletos[un_dia][cantidad]" placeholder="0">
             <input type="hidden" value="15" name="boletos[un_dia][precio]" id='p_rem1'>
    </div>
  </div>
</div>
<div class="card"  style="width: 18rem;">

<div id="carouselExampleControls"  class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/0021491528_10.jpg"  id="card-img-top" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/0021491519_10.jpg" class="d-block w-100" alt="...">
</div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  <div class="card-body" >
    <h5 class="card-title">Classic Knife T-shirt</h5>
    <p class="card-text">$15</p>
    <div class="orden">
        <label for="pase_dia">Add:</label>
             <input type="number" min="0" id="cant_rem2" size="3" name="boletos[un_dia][cantidad]" placeholder="0">
             <input type="hidden" value="15" name="boletos[un_dia][precio]" id='p_rem2'>
    </div>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="img/cas.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Cassette Bleeding Out Shadows Of The Past - Kamé</h5>
    <p class="card-text"> $12 </p>
    <div class="orden">
        <label for="pase_dia">Add:</label>
             <input type="number" min="0" id="cant_cst" size="3" name="boletos[un_dia][cantidad]" placeholder="0">
             <input type="hidden" value="12" name="boletos[un_dia][precio]" id='p_cst'>
    </div>
  </div>
</div>
<div class="card" style="width: 18rem;">
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/stik.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/sti.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  <div class="card-body">
    <h5 class="card-title">Stickers</h5>
    <p class="card-text">$1</p>
    <div class="orden">
        <label for="pase_dia">Add:</label>
             <input type="number" min="0" id="cant_s" size="3" name="boletos[un_dia][cantidad]" placeholder="0">
             <input type="hidden" value="1" name="boletos[un_dia][precio]" id='p_s'>
    </div>
  </div>
</div>

<div id="resumen" class="resumen">
    <h3>Resume</h3>
        <div class="caja clearfix">
            <input type="button" id="calcular" class="button" value="Calcular">
                <div class="total">
                    <p>Resumen:</p>
                    <div id="lista-productos">
                                <ul id="items" class="list-group">
                                    <li class="list-group-item"></li>
                                    <li class="list-group-item"></li>
                                    <li class="list-group-item"></li>
                                    <li class="list-group-item"></li>

                                </ul>
                    </div>
                    <p>Total:</p>
                    <div id="suma-total">
                                
                    </div>
                              <input type="hidden" name="total_pedido" id="total_pedido">
                              <input type="hidden" name="total_descuento" id="total_descuento" value="total_descuento">
                              <input id="btnRegistro" type="submit" name="submit" class="button" value="Pagar">
                </div> <!--.total-->
        </div><!--.caja-->
</div> <!--#resumen-->
</main>

    <script src="cotizadorMarket.js"></script>
    <?php
include "footer.php";
?>
</body>
</html>

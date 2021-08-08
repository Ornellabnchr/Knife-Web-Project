

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-In</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">


<style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }

  .mb-3{
      margin: 0%;
  }
  

  img.mb-4{
      padding: 0;
      margin:0%;
  }
  #log{
      display: flex;
      justify-content: center;
  }
  
</style>
<!-- Custom styles for this template -->



</head>
<body>
    
<?php
include "header.php";
?>
<main class="container" i> 
    <div id="log">
<img src="img/black knife.jpg" alt="" width="45%" height="25%">
</div>
<div id="log">
<form class="row g-3" novalidate action="conexionLog-Ow.php" method="POST">
<div class="mb-3">
<label for="inputEmail" class="sr-only"  >Email / Usuario</label>
  <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address" required autofocus>
  <br>
  <label for="inputPassword" class="sr-only">Clave</label>
  <input type="password" id="inputPassword" name="inputPassword"class="form-control" placeholder="Password" required>
  <div class="checkbox mb-3">
  
  </div>
  <button id="buttonI" class="btn btn-dark btn-primary btn-block" type="submit" value="aceptar">Ingresar</button>
 <p>owner123@gmail.com || 123456</p>
</form>
</div>

 

</main><?php
include "footer.php";
?>
</body>
</html>



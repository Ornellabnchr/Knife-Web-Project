<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="style.css" >
  
    <link href="scss/_navbar.scss." >


  </head>
<body>

<header>
   
<nav class="navbar navbar-light bg-light">
      <form class="container-fluid justify-content-end">
          <button class="btn btn-outline-success me-4 btn-dark" id= "b-c"   type="button"><a class="nav-link " id="b-c" aria-current="page"  href="log-in.php">Log-In</a></button>
          <button class="btn btn-outline-success me-4 btn-dark"  id= "b-c" type="button"><a class="nav-link " id="b-c" aria-current="page"  href="register.php">Register</a></button>
        </form>
</nav>

<br>

<div class="collapse" id="navbarToggleExternalContent">
  <div class="bg-dark p-4">
    <h5 class="text-white h4">Knife Records</h5>
    <ul>
    <li><a type="square" id="link" class="dropdown-item" href="music.php">Music</a></li>
              <li type="square"><a id="link" class="dropdown-item" href="videos.php">Videos</a></li>
              <li type="square"><a  id="link"class="dropdown-item" href="market.php">Market</a></li>
              <li type="square"><a  id="link"class="dropdown-item" href="contact.php">Contact</a></li>
              <li type="square"><a  id="link"class="dropdown-item" href="premieres.php">Premieres</a></li>
              <li type="square"><a  id="link"class="dropdown-item" href="podcasts.php">Podcast</a></li>
              </ul>
  </div>
</div>
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>
</header>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>

</body>
</html>


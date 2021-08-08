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

<?php


include 'conexion.php';

$d=$_POST['dni'];


$consulta = "SELECT * FROM `clientes` WHERE `dni`=$d";

$user=mysqli_query($conectar, $consulta);



?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Knife</title>
  </head>
  <body>
    
  <?php
include "headerSesion.php";
?>

<main>


<ul class="nav justify-content-center">

  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="pagUsuario.php">Inicio</a>
  </li>
  
</ul>

    <div class="row table-responsive">
        <table class="table table-responsive">
            
            <tr>
            <th>
               ID
                </th> 
                
                <th>
                Nombre
                </th> 
                <th>
                Apellido
                </th> 
                <th>
                DNI
                </th> 
                <th>
                zip
                </th>
                <th>
                Email
                </th>
                <th>
                 City
                </th>
                <th>
                State
                </th>
                <th>
                Pass
                </th>
                <th>
                Username
                </th> 
                <th>
                Direccion
                </th> 
                <th>
                Telefono
                </th> 
                <th>
                editar
                </th> 
                <th>
                  Mis compras
                </th> 
               
               

           
            </tr>

            
            <?php

while($tabla = mysqli_fetch_array($user))
{?>
    <tr>
    <td><?php echo $tabla['id'];?></td>
    <td><?php echo $tabla['nombre'];?></td>
    <td><?php echo $tabla['apellido'];?></td>
    <td><?php echo $tabla['dni'];?></td>
    <td><?php echo $tabla['zip'];?></td>
    <td><?php echo $tabla['email'];?></td>
    <td><?php echo $tabla['city'];?></td>
    <td><?php echo $tabla['state'];?></td>
    <td><?php echo $tabla['password'];?></td>
    <td><?php echo $tabla['username'];?></td>
    <td><?php echo $tabla['direccion'];?></td>
    <td><?php echo $tabla['telefono'];?></td>

    <td><a href="modificarMisDatos.php?id=<?php echo $tabla['dni'];?>"><i class="fas fa-pencil-alt"></i></a></td>
    <td><a href="comprasCli.php?id=<?php echo $tabla['id'];?>"><i class="fas fa-address-card"></i></a></td>
   
    
    </tr>
<?php } ?>

     
   
        </table>
        
    </div>
    
    </div>
    </main>
    <?php
    include "footer.php";
    ?>

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



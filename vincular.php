
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

$query="SELECT * FROM `productos` INNER JOIN (`ventas` INNER join `clientes` on `ventas`.`id`=`clientes`.`id`) ON `productos`.`id_p` = `ventas`.`id_p`)";

$listado=mysqli_query($conectar, $query);



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
    <a class="nav-link" href="agregarProducto.php">Agregar Producto</a>

<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="productos.php">Productos</a>
  </li>

  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="manipularUsuarios.php"> Clientes </a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="ventas.php">Ventas</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="ventas_prod_cli.php">Ventas</a>
  </li>
</ul>


<div class="row table-responsive">
        <table class="table table-responsive">
        <tr>
      
        <th>
        id_p
        </th>
        <th>
descripcion
</th>
<th>
precio
<th>
</th>
<th>
stock
</th>
<th>
id_v
</th>
<th>
fecha
</th>
<th>
total
</th>
<th>
id
</th>
<th>
id_p
</th>
<th>
precio
</th>
<th>
cantidad
<th>
</th>
<th>
id
</th>
<th>
nombre
</th>
<th>
apellido
</th>
<th>
password
</th>
<th>
dni
</th>
<th>
email
</th>
<th>
city
</th>
<th>
username
</th>
<th>
state
</th>
<th>
zip
</th>
<th>
direccion
</th>
<th>
telefono
</th> 
        <th>
        editar
        </th> 
        <th>
        eliminar
        </th> 
       

   
    </tr>
            
            <?php

while($tabla = mysqli_fetch_array($listado))
{?>

    ?>



    <tr>
    <td><?php echo $tabla['id_p'];?></td>
    <td><?php echo $tabla['descripcion'];?></td>
    <td><?php echo $tabla['precio'];?></td>
    <td><?php echo $tabla['stock'];?></td>
    <td><?php echo $tabla['id_v'];?></td>
    <td><?php echo $tabla['fecha'];?></td>
    <td><?php echo $tabla['total'];?></td>
    <td><?php echo $tabla['id'];?></td>
    <td><?php echo $tabla['id_p'];?></td>
    <td><?php echo $tabla['precio'];?></td>
    <td><?php echo $tabla['cantidad'];?></td>
    <td><?php echo $tabla['id'];?></td>
    <td><?php echo $tabla['nombre'];?></td>
    <td><?php echo $tabla['apellido'];?></td>
    <td><?php echo $tabla['password'];?></td>
    <td><?php echo $tabla['dni'];?></td>
    <td><?php echo $tabla['email'];?></td>
    <td><?php echo $tabla['city'];?></td>
    <td><?php echo $tabla['username'];?></td>
    <td><?php echo $tabla['state'];?></td>
    <td><?php echo $tabla['zip'];?></td>
    <td><?php echo $tabla['direccion'];?></td>
    <td><?php echo $tabla['telefono'];?></td>

    <
    
    </tr>
<?php } ?>

     
   
        </table>
        
    </div>
    
    </div>




</main>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<?php
include "footer.php";
?>

</body>
</html>
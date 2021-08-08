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
$idv= $_GET['id'];
$consulta="SELECT * FROM `ventas` INNER JOIN `clientes` WHERE `ventas`.`id_v`=$idv";

$listado=mysqli_query($conectar, $consulta);



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

<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="productos.php">Productos</a>
  </li>

  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="manipularUsuarios.php"> Clientes </a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="compras.php">Cargar Venta</a>
    <a class="nav-link active" aria-current="page" href="comprasLista.php">Listar Ventas</a>
  </li>
  
</ul>


<div class="row table-responsive">
        <table class="table table-responsive">
            
        <tr>
            <th>
               ID VENTA
                </th> 
                
                <th>
                FECHA
                </th> 
                <th>
                TOTAL
                </th> 
                <th>
               ID CLIENTE
                </th> 
                <th>
               ID PRODUCTO
                </th>
                <th>
               CANTIDAD
                </th>
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
               Password
                </th> 
                <th>
                dni
                </th>
                <th>
                Email
                </th>
                
                <th>
                 City
                </th>
                <th>
                Username
                </th>
                <th>
                State
                </th>
                <th>
                Zip
                </th> 
                <th>
                Direccion
                </th> 
                <th>
                Telefono
                </th> 
                
      
           
            </tr>
           

            
            <?php

while($tabla = mysqli_fetch_array($listado))
{?>

    <tr>
    <td><?php echo $tabla['id_v'];?></td>
	
    <td><?php echo $tabla['fecha'];?></td>
    <td><?php echo $tabla['total'];?></td>
    <td><?php echo $tabla['id'];?></td>
    <td><?php echo $tabla['id_p'];?></td>
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
    
    
    </tr>
<?php } ?>   
        </table>
        
    </div>
    
    </div>



    </main>
    <?php
    include "footer.php";
    ?>
  </body>
</html>
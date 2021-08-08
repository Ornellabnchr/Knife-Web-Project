<?php

session_start();
if (isset($_SESSION['conectado']) && $_SESSION['conectado'] == true) {
echo "Bienvenido! " . $_SESSION['email'];

} else {
echo "Esta pagina es solo para Propietarios.<br>";
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

$consulta = "SELECT * FROM `productos`";

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
     <a class="nav-link" href="agregarProducto.php">Agregar Producto</a>
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
               ID
                </th> 
                
                <th>
               Descripcion
                </th> 
                <th>
               Precio
                </th> 
                <th>
               Stock
                </th> 
               
                <th>
                Editar
                </th> 
                <th>
                Vincular con productos
                </th> 
                <th>
                Eliminar
                </th> 
               

           
            </tr>
           

            
            <?php

while($tabla = mysqli_fetch_array($listado))
{?>

    <tr>
    <td><?php echo $tabla['id_p'];?></td>
    <td><?php echo $tabla['descripcion'];?></td>
    <td><?php echo $tabla['precio'];?></td>
    <td><?php echo $tabla['stock'];?></td>
    
    <td><a href="modificarProd.php?id=<?php echo $tabla['id_p'];?>"><i class="fas fa-pencil-alt"></i></a></td>
    <td><a href="vincular.php?id=<?php echo $tabla['id_p'];?>"><i class="fas fa-address-card"></i></a></td>
    <td><a href="eliminarProd.php?id=<?php echo $tabla['id_p'];?>"><i class="fas fa-trash-alt"></i></a></td>
   
    
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
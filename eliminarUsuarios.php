<?php

require 'conexion.php';

//var_dump($_GET);
$dn = $_GET['id'];

$eliminar = "DELETE FROM `clientes` WHERE id='$dn'";


$insert=mysqli_query($conectar, $eliminar);

if($insert){
    echo '<script>alert("Registro Eliminado Correctamente");</script>';
    header("location: pagPropietario.php");

}else{
    echo 'Error: '. mysqli_errno($conectar);
}



?>


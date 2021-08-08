<?php

require 'conexion.php';

//echo 'Aqui es el Dump de post <br>';
//var_dump($_POST);
//echo 'termina el Dump <br>';


$idp= $_POST['id_p'];
echo "$id";
$descripcion= $_POST['descripcion'];

$precio= $_POST['precio'];

$stock= $_POST['stock'];


$actua="UPDATE `productos` SET `descripcion`='$descripcion',`precio`='$precio',`stock`='$stock' WHERE `id_p`='$idp'"; 

$insert=mysqli_query($conectar, $actua);

if($insert){
    echo "<script> alert (\"Vas a volver a la pagina productos\"); </script>";
echo "<script language=Javascript> location.href=\"productos.php\"; </script>";
die();
}else{
    echo 'Error: '. mysqli_errno($conectar);
}

?>







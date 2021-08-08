<?php

require 'conexion.php';

//echo 'Aqui es el Dump de post <br>';
//var_dump($_POST);
//echo 'termina el Dump <br>';


$id= $_POST['id'];
echo "$id";
$nombre= $_POST['nombre'];

$apellido= $_POST['apellido'];

$passwd= $_POST['password'];

$dni=$_POST['dni'];

$email= $_POST['email'];

$city= $_POST['city'];

$username= $_POST['username'];

$state= $_POST['state'];

$zip=$_POST['zip'];

$direccion=$_POST['direccion'];

$telefono=$_POST['telefono'];


$actua="UPDATE `clientes` SET `nombre`='$nombre',`apellido`='$apellido',`password`='$passwd',`dni`='$dni',`email`='$email',`city`='$city',`username`='$username',`state`='$state',`zip`='$zip',`direccion`='$direccion',`telefono`='$telefono' WHERE `id`=$id"; 

$insert=mysqli_query($conectar, $actua);

if($insert){
    echo "<script> alert (\"Vas a volver a la pagina cliente\"); </script>";
echo "<script language=Javascript> location.href=\"manipularUsuarios.php\"; </script>";
die();
}else{
    echo 'Error: '. mysqli_errno($conectar);
}

?>



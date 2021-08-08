<?php

require 'conexion.php';


$dni = $_GET['id'];


$eliminar = "DELETE FROM clientes WHERE id ='$dni'";


$insert=mysqli_query($conectar, $eliminar);

if($insert){
    echo 'Registro Eliminado Correctamente';
    header('Location: desconectarse.php');
}else{
    echo 'Error: '. mysqli_errno($conectar);
}

?>
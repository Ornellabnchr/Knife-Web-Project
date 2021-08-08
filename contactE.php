<?php
$email=$_GET['email'];
$tel=$_GET['tel'];
$mensaje=$_GET['mensaje'];
$nombre=$_GET['nombre'];
$asunto=$_GET['asunto'];
mail('ornebanchero1@gmail.com','$asunto','$mensaje','$email','$nombre');
?>




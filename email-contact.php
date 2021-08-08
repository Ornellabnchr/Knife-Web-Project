<?php

session_start();
$micuenta=include "contact.php";
$_SESSION['inicioSesion']=$micuenta;

$mensaje=$_POST['mensaje'];
$email=$_POST['email'];
$asunto=$_POST['asunto'];
$tel=$_POST['tel'];

mail("ornebanchero@hotmail.com","$asunto","$mensaje,$tel,$email");

?>
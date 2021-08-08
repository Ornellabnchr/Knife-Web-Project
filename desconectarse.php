<?php
session_start();
unset ($_SESSION['Email']);
$_SESSION["conectado"]==false;
session_destroy(); 
echo "<script> alert (\"Adios\"); </script>";
echo "<script language=Javascript> location.href=\"index.php\"; </script>";
?>
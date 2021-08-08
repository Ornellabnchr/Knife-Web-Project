<?php
   echo $_POST['inputEmail'] . "<BR>";
   echo $_POST['inputPassword'] . "<BR>";
   
   $e=$_POST['inputEmail'];
   $p=$_POST['inputPassword'];

   
   require("conexion.php");
   
 
   
   $query = " SELECT `password`, `email` FROM `propietarios` WHERE `password`='$p' AND `email`='$e'";
   
   $conn=mysqli_query($conectar,$query);

   var_dump($conn);
   $row_cnt = $conn->num_rows;
 
   echo "<BR>". "Cantidad de propietarios encontrados: ";
   echo $row_cnt ;
   if($row_cnt==1){
    session_start();
        $_SESSION['conectado'] = true;
        $_SESSION['email'] = $e;
        $_SESSION['expira']=1000000000000000;
        echo "<script> alert (\"Bienvenido a su sesion Propietario\"); </script>";
echo "<script language=Javascript> location.href=\"pagPropietario.php\"; </script>";
die();
        exit();
     }else{
        $error_login = true;
     
   }
   



?>
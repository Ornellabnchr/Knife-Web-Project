<?php

class conectarse{
// definicion de atributos
private $host;
private $user;
private $password;
private $database;
private $conn;

public function __construct(){
$this->user='root';//id17125520_ornella
$this->password=''; //kX\~-$4Tl0Ihy<x=
$this->database='knife'; //id17125520_knife
$this->host='localhost';
}
//"localhost","id17125520_bnchr","#s<jFQ-Hm}Z#!B4f","id17125520_knife"

public function conecta(){
// crea y retorna la conexión con la BD
$this->conn= new mysqli($this->host, $this->user, $this->password, $this->database);
if($this->conn->connect_errno){
    die("Error de conexión: (" . $this->conn->connect_error . ")" . $this->conn->connect_errno);
    
        printf("Conexión fallida: %s\n", mysqli_connect_error());
        exit();
    }
    
else{

        printf("conectado <br>");
        
    }
    
}
public function cerrarbd(){
// Metodo que cierra la conexion con la BD
$this->conn->close();
}

public function ejecutar($sql){
    $result=true;
$result = $this->conn->query($sql);
return $result;
}
public function renglones(){
return $this->conn->affected->rows;
}
public function ultimorenglon($result){
    return $result->fetch_row();
}

}
?>

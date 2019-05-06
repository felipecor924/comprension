<?php
  include"conexion.php";

try{
    
    $mbd = new PDO("mysql:host=$host;dbname=$bd",$user,$pass,array(PDO::ATTR_PERSISTENT => true));
    $mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $query=$mbd->prepare("SELECT nombre FROM asignatura");
    
    $query->execute(); 

    if($query->rowCount()>1){
        
    }
    echo("Ingreso a la plataforma");
    
}catch(Exception $e){
    echo("No se puedo ingresar a la base de datos". $e->getMessage());
}
?>
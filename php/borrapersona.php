<?php
  include"conexion.php";
    
    $codigo=$_POST['codigo'];

try{
    
    $mbd = new PDO("mysql:host=$host;dbname=$bd",$user,$pass,array(PDO::ATTR_PERSISTENT => true));
    $mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $query=$mbd->prepare("DELETE * FROM persona WHERE codigo='" . $codigo . "'");
    
    $query->bindParam(1, $codigo);
    $query->execute(); 

    if($query->rowCount()>1){
        
    }
    echo("Se ha actualizado con éxito");
    
}catch(Exception $e){
    echo("No se puedo ingresar a la base de datos". $e->getMessage());
}
?>
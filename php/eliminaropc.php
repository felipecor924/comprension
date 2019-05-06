<?php
  include"conexion.php";
    
    $opcioneliminar=$_POST['opcioneliminar'];

try{
    
    $mbd = new PDO("mysql:host=$host;dbname=$bd",$user,$pass,array(PDO::ATTR_PERSISTENT => true));
    $mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $query=$mbd->prepare("DELETE FROM opcion WHERE opcion='" . $opcioneliminar . "'");
    
    $query->bindParam(1, $opcioneliminar);
    $query->execute(); 

    if($query->rowCount()>1){
        
    }
    header('Location: /pagina/paginas/docente/opcion.html');
    
}catch(Exception $e){
    echo("No se puedo ingresar a la base de datos". $e->getMessage());
}
?>
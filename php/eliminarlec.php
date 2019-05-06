<?php
  include"conexion.php";
    
    $lecturaeliminar=$_POST['lecturaeliminar'];

try{
    
    $mbd = new PDO("mysql:host=$host;dbname=$bd",$user,$pass,array(PDO::ATTR_PERSISTENT => true));
    $mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $query=$mbd->prepare("DELETE FROM lectura WHERE id='" . $lecturaeliminar . "'");
    
    $query->bindParam(1, $lecturaeliminar);
    $query->execute(); 

    if($query->rowCount()>1){
        
    }
    header('Location: /pagina/paginas/docente/lectura.html');
    
}catch(Exception $e){
    echo("No se puedo ingresar a la base de datos". $e->getMessage());
}
?>
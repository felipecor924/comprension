<?php
  include"conexion.php";
    
    $preguntaeliminar=$_POST['preguntaeliminar'];

try{
    
    $mbd = new PDO("mysql:host=$host;dbname=$bd",$user,$pass,array(PDO::ATTR_PERSISTENT => true));
    $mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $query=$mbd->prepare("DELETE FROM pregunta WHERE id='" . $preguntaeliminar . "'");
    
    $query->bindParam(1, $preguntaeliminar);
    $query->execute(); 

    if($query->rowCount()>1){
        
    }
    header('Location: /pagina/paginas/docente/pregunta.html');
    
}catch(Exception $e){
    echo("No se puedo ingresar a la base de datos". $e->getMessage());
}
?>
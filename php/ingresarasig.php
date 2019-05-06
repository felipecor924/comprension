<?php
  include"conexion.php";
    
    $codigo=$_POST['codigo'];
    $codprograma=$_POST['codprograma'];
    $nombre=$_POST['nombre'];
    $semestre=$_POST['semestre'];

try{
   
    $mbd = new PDO("mysql:host=$host;dbname=$bd",$user,$pass,array(PDO::ATTR_PERSISTENT => true));
    $mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $query=$mbd->prepare("INSERT INTO asignatura (codigo,codigo_programa,nombre,semestre) VALUES(?,?,?,?)");
    
    $query->bindParam(1, $codigo);
    $query->bindParam(2, $codprograma);
    $query->bindParam(3, $nombre);
    $query->bindParam(4, $semestre);
    
    $query->execute();
    
    if($query->rowCount()>1){
        
    }
    echo("Se ha registrado con éxito");
    
} catch (Exception $e){
    echo("No se puedo ingresar a la base de datos". $e->getMessage());
}
?>
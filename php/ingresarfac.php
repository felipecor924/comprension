<?php
  include"conexion.php";
    
    $codigo=$_POST['codigo'];
    $nomfacultad=$_POST['nomfacultad'];
    $nombre=$_POST['nombre'];

try{
   
    $mbd = new PDO("mysql:host=$host;dbname=$bd",$user,$pass,array(PDO::ATTR_PERSISTENT => true));
    $mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $query=$mbd->prepare("INSERT INTO facultad (codigo,nombre_facultad,nombre) VALUES(?,?,?)");
    
    $query->bindParam(1, $codigo);
    $query->bindParam(2, $nomfacultad);
    $query->bindParam(3, $nombre);
    
    $query->execute();
    
    if($query->rowCount()>1){
        
    }
    echo("Se ha registrado con éxito");
    
} catch (Exception $e){
    echo("No se puedo ingresar a la base de datos". $e->getMessage());
}
?>
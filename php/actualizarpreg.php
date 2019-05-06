<?php
  include"conexion.php";
    
    $descripcion=$_POST['descripcion'];
    $id_lectura=$_POST['id_lectura'];
    $id=$_POST['id'];
    $codigo_docente=$_POST['codigo_docente'];


try{
    $mbd = new PDO("mysql:host=$host;dbname=$bd",$user,$pass,array(PDO::ATTR_PERSISTENT => true));
    $mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $query=$mbd->prepare("UPDATE pregunta Set desc_pregunta='$descripcion' Where id='$id'");
    $query->execute(); 
    
    if($query->rowCount()>1){
       
    }

    header('Location: /pagina/paginas/docente/pregunta.html');

    
}catch(Exception $e){
    echo("No se puedo ingresar a la base de datos". $e->getMessage());
}
?>
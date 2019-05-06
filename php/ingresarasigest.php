<?php
  include"conexion.php";

    $codigo_asignatura=$_POST['codigo_asignatura'];
    $codigo_persona=$_POST['codigo_persona'];
    $codigo_programa=$_POST['codigo_programa'];

try{
   
    $mbd = new PDO("mysql:host=$host;dbname=$bd",$user,$pass,array(PDO::ATTR_PERSISTENT => true));
    $mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $query=$mbd->prepare("INSERT INTO asignatura_estudiante (codigo_programa,codigo_persona,codigo_asignatura) VALUES(?,?,?)");
    
    $query->bindParam(1, $codigo_programa);
    $query->bindParam(2, $codigo_persona);
    $query->bindParam(3, $codigo_asignatura);
    
    $query->execute();
    
    if($query->rowCount()>1){
        
    }
    header('Location: /pagina/paginas/estudiante/estudianteindex.html');
    
} catch (Exception $e){
    echo("No se puedo ingresar a la base de datos". $e->getMessage());
}
?>
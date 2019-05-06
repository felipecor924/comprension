<?php

    include"conexion.php";
    $codigo_asignatura=$_POST['codigo_asignatura'];
    $codigo_persona=$_POST['codigo_persona'];


try{
   
    $mbd = new PDO("mysql:host=$host;dbname=$bd",$user,$pass,array(PDO::ATTR_PERSISTENT => true));
    $mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $query=$mbd->prepare("INSERT INTO asignatura_docente (codigo_docente,codigo_asignatura) VALUES(?,?)");

    $query->bindParam(1, $codigo_persona);
    $query->bindParam(2, $codigo_asignatura);
    
    $query->execute();
    
    if($query->rowCount()>1){
        
    }
    header('Location: /pagina/paginas/docente/docenteindex.html');
    
} catch (Exception $e){
    echo("No se puedo ingresar a la base de datos". $e->getMessage());
}
?>
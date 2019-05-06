<?php
  include"conexion.php";
    
    $codigo_docente=$_POST['codigo_docente'];
    $codigo_asignatura=$_POST['codigo_asignatura'];
    $tipo_lectura=$_POST['tipo_lectura'];
    $titulo=$_POST['titulo'];
    $descripcion=$_POST['descripcion'];

try{
   
    $mbd = new PDO("mysql:host=$host;dbname=$bd",$user,$pass,array(PDO::ATTR_PERSISTENT => true));
    $mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $query=$mbd->prepare("INSERT INTO lectura (codigo_docente, codigo_asignatura, tipo_lectura, titulo, descripcion) VALUES(?,?,?,?,?)");
    
    $query->bindParam(1, $codigo_docente);
    $query->bindParam(2, $codigo_asignatura);
    $query->bindParam(3, $tipo_lectura);
    $query->bindParam(4, $titulo);
    $query->bindParam(5, $descripcion);
    
    $query->execute();
    
    if($query->rowCount()>1){
        
    }
    header('Location: /pagina/paginas/docente/lectura.html');
    
} catch (Exception $e){
    echo("No se puedo ingresar a la base de datos". $e->getMessage());
}
?>
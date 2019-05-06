<?php
  include"conexion.php";
    
    $codigo_docente=$_POST['codigo_docente'];
    $codigo_asignatura=$_POST['codigo_asignatura'];
    $tipo_lectura=$_POST['tipo_lectura'];
    $titulo=$_POST['titulo'];
    $descripcion=$_POST['descripcion'];
    $id=$_POST['id_lectura'];

try{
    $mbd = new PDO("mysql:host=$host;dbname=$bd",$user,$pass,array(PDO::ATTR_PERSISTENT => true));
    $mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $query=$mbd->prepare("UPDATE lectura Set codigo_docente='$codigo_docente', codigo_asignatura='$codigo_asignatura', tipo_lectura='$tipo_lectura', titulo='$titulo', descripcion='$descripcion' Where id='$id'");
    $query->execute(); 
    
    if($query->rowCount()>1){
       
    }

    header('Location: /pagina/paginas/docente/lectura.html');

    
}catch(Exception $e){
    echo("No se puedo ingresar a la base de datos". $e->getMessage());
}
?>
<?php
  include"conexion.php";
    
    $id_pregunta=$_POST['id_pregunta'];

    $opcion1=$_POST['opcion1'];
    $respuesta1=$_POST['respuesta1'];

    $opcion2=$_POST['opcion2'];
    $respuesta2=$_POST['respuesta2'];

    $opcion3=$_POST['opcion3'];
    $respuesta3=$_POST['respuesta3'];

    $opcion4=$_POST['opcion4'];
    $respuesta4=$_POST['respuesta4'];

try{
    $mbd = new PDO("mysql:host=$host;dbname=$bd",$user,$pass,array(PDO::ATTR_PERSISTENT => true));
    $mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $query=$mbd->prepare("INSERT INTO opcion (opcion, id_pregunta, respuesta) VALUES(?,?,?)");
    $query->bindParam(1, $opcion1); $query->bindParam(2, $id_pregunta); $query->bindParam(3, $respuesta1); $query->execute();

    $query=$mbd->prepare("INSERT INTO opcion (opcion, id_pregunta, respuesta) VALUES(?,?,?)");
    $query->bindParam(1, $opcion2); $query->bindParam(2, $id_pregunta); $query->bindParam(3, $respuesta2); $query->execute();

    $query=$mbd->prepare("INSERT INTO opcion (opcion, id_pregunta, respuesta) VALUES(?,?,?)");
    $query->bindParam(1, $opcion3); $query->bindParam(2, $id_pregunta); $query->bindParam(3, $respuesta3); $query->execute();

    $query=$mbd->prepare("INSERT INTO opcion (opcion, id_pregunta, respuesta) VALUES(?,?,?)");
    $query->bindParam(1, $opcion4); $query->bindParam(2, $id_pregunta); $query->bindParam(3, $respuesta4); $query->execute();
    if($query->rowCount()>1){
        
    }
    header('Location: /pagina/paginas/docente/opcion.html');
    
} catch (Exception $e){
    echo("No se puedo ingresar a la base de datos". $e->getMessage());
}
?>
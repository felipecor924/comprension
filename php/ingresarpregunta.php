<?php
  include"conexion.php";
    
    $codigo_docente=$_POST['codigo_docente'];
    $id_lectura=$_POST['id_lectura'];
    $pregunta1=$_POST['pregunta1'];
    $pregunta2=$_POST['pregunta2'];
    $pregunta3=$_POST['pregunta3'];
    $pregunta4=$_POST['pregunta4'];
    $pregunta5=$_POST['pregunta5'];

try{
    $mbd = new PDO("mysql:host=$host;dbname=$bd",$user,$pass,array(PDO::ATTR_PERSISTENT => true));
    $mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $resultado = $mbd->prepare("SELECT * FROM lectura l WHERE l.id=:id");
        $resultado->bindParam(':id', $id_lectura);
        $resultado->execute();
        while($registro =$resultado->fetch(PDO::FETCH_ASSOC)){
        $codigo_asignatura=$registro['codigo_asignatura'];
        }

    $query=$mbd->prepare("INSERT INTO pregunta (codigo_docente, codigo_asignatura, id_lectura, desc_pregunta) VALUES(?,?,?,?)");
    $query->bindParam(1, $codigo_docente); $query->bindParam(2, $codigo_asignatura); $query->bindParam(3, $id_lectura); $query->bindParam(4, $pregunta1); $query->execute();

    $query=$mbd->prepare("INSERT INTO pregunta (codigo_docente, codigo_asignatura, id_lectura, desc_pregunta) VALUES(?,?,?,?)");
    $query->bindParam(1, $codigo_docente); $query->bindParam(2, $codigo_asignatura); $query->bindParam(3, $id_lectura); $query->bindParam(4, $pregunta2); $query->execute();

    $query=$mbd->prepare("INSERT INTO pregunta (codigo_docente, codigo_asignatura, id_lectura, desc_pregunta) VALUES(?,?,?,?)");
    $query->bindParam(1, $codigo_docente); $query->bindParam(2, $codigo_asignatura); $query->bindParam(3, $id_lectura); $query->bindParam(4, $pregunta3); $query->execute();

    $query=$mbd->prepare("INSERT INTO pregunta (codigo_docente, codigo_asignatura, id_lectura, desc_pregunta) VALUES(?,?,?,?)");
    $query->bindParam(1, $codigo_docente); $query->bindParam(2, $codigo_asignatura); $query->bindParam(3, $id_lectura); $query->bindParam(4, $pregunta4); $query->execute();

    $query=$mbd->prepare("INSERT INTO pregunta (codigo_docente, codigo_asignatura, id_lectura, desc_pregunta) VALUES(?,?,?,?)");
    $query->bindParam(1, $codigo_docente); $query->bindParam(2, $codigo_asignatura); $query->bindParam(3, $id_lectura); $query->bindParam(4, $pregunta5); $query->execute();


    if($query->rowCount()>1){
        
    }
    header('Location: /pagina/paginas/docente/pregunta.html');
    
} catch (Exception $e){
    echo("No se puedo ingresar a la base de datos". $e->getMessage());
}
?>
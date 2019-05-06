<?php
  include"conexion.php";

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $tipo = $_POST['tipo'];
    $codigo = $_POST['codigo'];
    $email = $_POST['email'];
    $programa = $_POST['programa'];
    $dpto = $_POST['departamento'];
    $password = $_POST['password'];
    $telefono = $_POST['telefono'];

    /*echo $programa;*/

try{
   
    $mbd = new PDO("mysql:host=$host;dbname=$bd",$user,$pass,array(PDO::ATTR_PERSISTENT => true));
    $mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $query=$mbd->prepare("INSERT INTO persona (codigo,nombre,apellido,correo,telefono,password,tipo) VALUES(?,?,?,?,?,?,?)");    
    $query->bindParam(1, $codigo);
    $query->bindParam(2, $nombre);
    $query->bindParam(3, $apellido);
    $query->bindParam(4, $email);
    $query->bindParam(5, $telefono);
    $query->bindParam(6, $password);
    $query->bindParam(7, $tipo);
    $query->execute();
    
    if($tipo==2){
        $queryprog=$mbd->prepare("INSERT INTO estudiante(codigo_programa,codigo_persona)VALUES(?,?)");
        $queryprog->bindParam(1,$programa);
        $queryprog->bindParam(2,$codigo);    
        $queryprog->execute();    
    }else{
        if($tipo==1){
            $querydpto=$mbd->prepare("INSERT INTO docente(nombre_departamento,codigo_persona)VALUES(?,?)");
            $querydpto->bindParam(1,$dpto);
            $querydpto->bindParam(2,$codigo);
            $querydpto->execute();
        }
    }
    
    if($query->rowCount()>1 && ($querydpto->rowCount()>1 || $queryprog->rowCount()>1)){
        
    }
    session_start();
    $_SESSION['codigo']=$codigo;
    if($tipo=="3" ){
      header('Location: /pagina/paginas/administrador/adminindex.html');
    }
    if($tipo=="2"){
      header('Location: /pagina/paginas/estudiante/estudianteindex.html');
    }
    if($tipo=="1"){
      header('Location: /pagina/paginas/docente/docenteindex.html');
    }
    
} catch (Exception $e){
    echo("No se puedo ingresar a la base de datos". $e->getMessage());
}

?>
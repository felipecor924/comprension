<?php

    include"conexion.php";
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $correo=$_POST['correo'];
    $telefono=$_POST['telefono'];
    $password=$_POST['password'];
    $codigo=$_POST['codigo'];
    
    $resul = $base->prepare('SELECT * FROM persona WHERE codigo = :codigo');
    $session= $_SESSION['codigo'];
    $resul->bindParam(':codigo', $session);
    $resul->execute();
    while($consulta = $resul->fetch(PDO::FETCH_ASSOC)){
        $tipo =  $consulta['tipo'];
    }
    

try{
    $mbd = new PDO("mysql:host=$host;dbname=$bd",$user,$pass,array(PDO::ATTR_PERSISTENT => true));
    $mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $query=$mbd->prepare("UPDATE persona Set nombre='$nombre', apellido='$apellido', correo='$correo', telefono='$telefono', password='$password' Where codigo='$codigo'");
    //echo ("UPDATE persona Set telefono='$telefono', correo='$correo', password='$password' Where codigo='$codigo'");
    $query->execute(); 
    
    if($query->rowCount()>1){
       
    }

    if($tipo=="1" ){
      header('Location: /pagina/paginas/docente/docenteindex.html');
    }
    if($tipo=="2"){
      header('Location: /pagina/paginas/estudiante/estudianteindex.html');
    }

    
}catch(Exception $e){
    echo("No se puedo ingresar a la base de datos". $e->getMessage());
}
?>
<?php
  include"conexion.php";
    
    $usuario=$_POST['usuario'];
    $password=$_POST['password'];

try{
    
    $mbd = new PDO("mysql:host=$host;dbname=$bd",$user,$pass,array(PDO::ATTR_PERSISTENT => true));
    $mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $cons=("SELECT persona.codigo, persona.password 
        FROM persona 
        INNER JOIN estudiante ON persona.codigo=estudiante.codigo_persona 
        INNER JOIN docente ON persona.codigo=docente.codigo_persona 
        WHERE persona.codigo='".$usuario."' AND persona.password='".$password."'");
    $query = $mbd->prepare($cons);
    
    $query->bindParam(1, $usuario);
    $query->bindParam(2, $password);
    
    $query->execute(); 
   
    if($query->rowCount()>1){
        
    }
    
    $consest=$mbd->prepare("SELECT descripcion 
        FROM persona 
        INNER JOIN tipo ON persona.tipo=tipo.id 
        INNER JOIN estudiante ON persona.codigo=estudiante.codigo_persona
        WHERE codigo='".$usuario."' AND password='".$password."'");

    $consdoc=$mbd->prepare("SELECT descripcion 
        FROM persona 
        INNER JOIN tipo ON persona.tipo=tipo.id 
        INNER JOIN docente ON persona.codigo=docente.codigo_persona
        WHERE codigo='".$usuario."' AND password='".$password."'");

    $consadm=$mbd->prepare("SELECT descripcion 
        FROM persona 
        INNER JOIN tipo ON persona.tipo=tipo.id 
        INNER JOIN administrador ON persona.codigo=administrador.codigo_persona
        WHERE codigo='".$usuario."' AND password='".$password."'");
    
    
    $consultaCodigo = $mbd->prepare("SELECT codigo 
        FROM persona 
        WHERE codigo = '$usuario' AND password = '$password'");
//    echo("SELECT codigo 
//        FROM persona 
//        WHERE codigo = '$usuario' AND password = '$password'");
//    exit;
    $consest->execute();
    $consdoc->execute();
    $consadm->execute();
    
    $consultaCodigo->execute();

    $rowest= $consest->fetch();
    $rowdoc= $consdoc->fetch();
    $rowadm= $consadm->fetch();
    
    while($registro =$consultaCodigo->fetch(PDO::FETCH_ASSOC)){
      $codigo =  $registro['codigo'];
      
    }
    session_start();
    $_SESSION['codigo'] = $codigo;

   if($rowadm['descripcion']=="ADMINISTRADOR" ){
      header('Location: /pagina/paginas/administrador/adminindex.html');
    }
    else if($rowest['descripcion']=="ESTUDIANTE"){
      header('Location: /pagina/paginas/estudiante/estudianteindex.html');
    }
    else if($rowdoc['descripcion']=="DOCENTE"){
      header('Location: /pagina/paginas/docente/docenteindex.html');
    }
    else if($rowadm['descripcion']!="ADMINISTRADOR" || $rowest['descripcion']!="ESTUDIANTE" || $rowdoc['descripcion']!="DOCENTE"){
        header('Location: /pagina/index.html');
    }
}catch(Exception $e){
    echo("No se puedo ingresar a la base de datos". $e->getMessage());
}
?>
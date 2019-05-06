<?php
  include"conexion.php";
    
    $fecha=getdate();
    $year=$fecha['year'];
    $mon=$fecha['mon'];
    $mday=$fecha['mday']-1;
    $fechasql="$year-$mon-$mday";
    $codigo_asignatura=$_POST['codigo_asignatura'];
    $codigo_programa=$_POST['codigo_programa'];
    $codigo_persona=$_POST['codigo_persona'];
    $id_lectura=$_POST['id_lectura'];
    $codigo_docente=$_POST['codigo_docente'];
    $codigo_asignatura_lec=$_POST['codigo_asignatura_lec'];

    $correcta=0;
    $incorrecta=0;
    $total=0;
    

   /* print("$fechasql     ");
    print("$codigo_asignatura     ");
    print("$codigo_programa     ");
    print("$codigo_persona     ");
    print("$id_lectura     ");
    print("$codigo_docente     ");
    print("$codigo_asignatura_lec     ");
*/
try{
    $mbd = new PDO("mysql:host=$host;dbname=$bd",$user,$pass,array(PDO::ATTR_PERSISTENT => true));
    $mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $resultado = $mbd->prepare("SELECT * FROM pregunta p WHERE p.id_lectura=$id_lectura");
    $resultado->execute();
    while($registro =$resultado->fetch(PDO::FETCH_ASSOC)){
        $desc_pregunta =  $registro['desc_pregunta'];
        $id =  $registro['id'];
        $resultado4 = $mbd->prepare("SELECT * FROM opcion o WHERE o.id_pregunta=$id AND o.respuesta='TRUE'");
        $resultado4->execute();

        while($registro =$resultado4->fetch(PDO::FETCH_ASSOC)){
            $opcion =  $registro['opcion'];
            $respuesta=$registro['respuesta'];
            $id_pregunt=$registro['id_pregunta'];
            $marcada=$_POST["$id_pregunt"];
            
            if($opcion==$marcada){
                $correcta++;
                $total++;
            }else{
                $incorrecta++;
                $total++;
            }
        }
    }

    $query=$mbd->prepare("INSERT INTO prueba (fecha,codigo_asignatura,codigo_programa,codigo_persona,id_lectura,contador,incorrectas,correctas,codigo_docente,codigo_asignatura_lec) VALUES (?,?,?,?,?,?,?,?,?,?)");
        $query->bindParam(1, $fechasql);
        $query->bindParam(2, $codigo_asignatura);
        $query->bindParam(3, $codigo_programa);
        $query->bindParam(4, $codigo_persona);
        $query->bindParam(5, $id_lectura);
        $query->bindParam(6, $total);
        $query->bindParam(7, $incorrecta);
        $query->bindParam(8, $correcta);
        $query->bindParam(9, $codigo_docente);
        $query->bindParam(10, $codigo_asignatura_lec);
        
        $query->execute();

    $resultado = $mbd->prepare("SELECT * FROM pregunta p WHERE p.id_lectura=$id_lectura");
    $resultado->execute();
    while($registro =$resultado->fetch(PDO::FETCH_ASSOC)){
        $desc_pregunta =  $registro['desc_pregunta'];
        $id =  $registro['id'];
        $resultado4 = $mbd->prepare("SELECT * FROM opcion o WHERE o.id_pregunta=$id AND o.respuesta='TRUE'");
        $resultado4->execute();

        while($registro =$resultado4->fetch(PDO::FETCH_ASSOC)){
            $opcion =  $registro['opcion'];
            $respuesta=$registro['respuesta'];
            $id_pregunt=$registro['id_pregunta'];
            $marcada=$_POST["$id_pregunt"];

    $query=$mbd->prepare("INSERT INTO respuesta_estudiante (fecha,id_pregunta,opcion,codigo_programa,codigo_persona) VALUES (?,?,?,?,?)");
        $query->bindParam(1, $fechasql);
        $query->bindParam(2, $id_pregunt);
        $query->bindParam(3, $opcion);
        $query->bindParam(4, $codigo_programa);
        $query->bindParam(5, $codigo_persona);
        
        $query->execute();
        }
        }
    if($query->rowCount()>1){
       
    }

    header('Location: /pagina/paginas/estudiante/estudianteindex.html');
    
}catch(Exception $e){
    echo("No se puedo ingresar a la base de datos". $e->getMessage());
}
?>
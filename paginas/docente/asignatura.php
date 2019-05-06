<?php
	include"../../php/conexion.php";
	session_start();
	$base =  new PDO("mysql:host=$host;dbname=$bd",$user,$pass,array(PDO::ATTR_PERSISTENT => true));
	$base->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$base->exec("SET CHARACTER SET utf8");
	$session=$_SESSION['codigo'];
			
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registrar Asignatura</title>
	</script>
</head>

<body>
	<div class="col-sm-9 col-xs-8">
		<div class="contenedor-form">
			<h2>REGISTRAR ASIGNATURA</h2>
			<span class="required_notification">* Datos requeridos</span>
			<form action="../../php/ingresarasigdoc.php" method="post" name="asignatura">

				<select name="codigo_asignatura" id="codigo_asignatura">
					<option id="" selected value="0">Elija la Asignatura</option>
					<?php 
						$resultado = $base->prepare("SELECT a.nombre, a.codigo, a.codigo_programa, a.semestre 
					  	FROM asignatura a LEFT JOIN asignatura_docente ad ON a.codigo=ad.codigo_asignatura 
					  	WHERE ad.codigo_asignatura IS null
					  	ORDER BY a.semestre");
					  $resultado->execute();
					  while($registro =$resultado->fetch(PDO::FETCH_ASSOC)){
					  $nombre =  $registro['nombre']; 
					  $codigo =  $registro['codigo']; 
					  $codigo_programa =  $registro['codigo_programa']; ?>
					<option id="" name="codigo" value="<?php echo $codigo; ?>">
						<?php echo $codigo_programa;?><?php echo $codigo; ?> - <?php echo $nombre; ?>
					</option>
					<?php } 
					?>
				</select>

				<input type="hidden" name="codigo_persona" value="<?php echo $session; ?>"/>

				<input type="submit" value="Guardar" >

				<a href="docenteindex.html"><button class="submit" type="button">Cancelar</button></a>
			</form>
			
		</div>
	</div>
</body>
</html>
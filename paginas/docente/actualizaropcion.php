<?php
	include"../../php/conexion.php";
	session_start();
	$base =  new PDO("mysql:host=$host;dbname=$bd",$user,$pass,array(PDO::ATTR_PERSISTENT => true));
	$base->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$base->exec("SET CHARACTER SET utf8");
	$session= $_SESSION['codigo'];

	$resultado = $base->prepare("SELECT * FROM pregunta p WHERE p.codigo_docente=:codigo");
	$resultado->bindParam(':codigo', $session);
	$resultado->execute();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Actualizar Datos Lectura</title>
</head>

<body>
	<div class="col-sm-9 col-xs-8">
		<div class="contenedor-form ">
			<h2>ACTUALIZAR OPCION</h2>
			<span class="required_notification">* Datos requeridos</span>
			<form action="actualizaropc.php" method="post" name="actualizarlect">
				<select name="codigo_pregunta" id="codigo_pregunta">
					<option id="" selected value="0">Elija la Pregunta</option>
					<?php 
						while($registro =$resultado->fetch(PDO::FETCH_ASSOC)){
							$id =  $registro['id'];
							$desc_pregunta =  $registro['desc_pregunta'];
					?>
					<option id="" name="codigo" value="<?php echo $id; ?>"><?php echo $desc_pregunta;
					?>
					</option>
					<?php
						} 
					?>
				</select>

				<input type="hidden" name="codigo_docente" value="<?php echo $session; ?>">

				<input type="submit" name="" value="Actualizar" onclick="">
				
				<a href="lectura.html"><button class="submit" type="button">Cancelar</button></a>
			</form>
		</div>
	</div>
</body>
</html>
<?php
	include"../../php/conexion.php";
	session_start();
	$base =  new PDO("mysql:host=$host;dbname=$bd",$user,$pass,array(PDO::ATTR_PERSISTENT => true));
	$base->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$base->exec("SET CHARACTER SET utf8");

	$resultado = $base->prepare("SELECT *
	FROM opcion o INNER JOIN pregunta p ON o.id_pregunta =p.id
	WHERE p.codigo_docente=:codigo");
	$session= $_SESSION['codigo'];
	$resultado->bindParam(':codigo', $session);
	$resultado->execute();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Eliminar Opcion</title>
</head>

<body>
	<div class="col-sm-9 col-xs-8">
		<div class="contenedor-form ">
			<h2>ELIMINAR OPCION</h2>
			<span class="required_notification">* Datos requeridos</span>
			<form action="../../php/eliminaropc.php" method="post" name="eliminaropc">
				<select name="opcioneliminar" id="opcioneliminar">
					<option id="" selected value="0">Elija la pregunta</option>
					<?php 
						while($registro =$resultado->fetch(PDO::FETCH_ASSOC)){
							$opcion =  $registro['opcion']; 
					?>
					<option id="" name="codigo" value="<?php echo $opcion; ?>"><?php echo $opcion;
					?>
					</option>
					<?php 
						} 
					?>
				</select>
				<input type="submit" name="" value="Eliminar" onclick="">
				
				<a href="opcion.html"><button class="submit" type="button">Cancelar</button></a>
			</form>
		</div>
	</div>
</body>
</html>

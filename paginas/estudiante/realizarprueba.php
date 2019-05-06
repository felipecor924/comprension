<?php
	include"../../php/conexion.php";
	session_start();
	$base =  new PDO("mysql:host=$host;dbname=$bd",$user,$pass,array(PDO::ATTR_PERSISTENT => true));
	$base->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$base->exec("SET CHARACTER SET utf8");

	$resultado = $base->prepare("SELECT * 
		FROM asignatura_estudiante ae LEFT JOIN asignatura a ON a.codigo=ae.codigo_asignatura 
		WHERE ae.codigo_persona=:codigo");
	$session= $_SESSION['codigo'];
	$resultado->bindParam(':codigo', $session);
	$resultado->execute();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Agregar Asignatura</title>
</head>
<body>
	<div class="contenedor">
		<div class="col-sm-9 col-xs-8">
			<div class="contenedor-form">
				<h2>Selecciona Asignatura</h2>
				<form action="prueba.php" method="post" name="prueba">
					<select name="id_asignatura" id="id_asignatura">
					<?php 
						while($registro =$resultado->fetch(PDO::FETCH_ASSOC)){
							$codigo_asignatura =  $registro['codigo_asignatura'];
							$nombre =  $registro['nombre'];
					?>
					<option id="" name="codigo" value="<?php echo $codigo_asignatura; ?>" required><?php echo $nombre;
					?>
					</option>
					<?php
						}
					?>
					</select>

					<input type="submit" value="Continuar" onclick="">
				</form>
			</div>
		</div>
	</div>
</body>
</html>
<?php
		include"../../php/conexion.php";
		session_start();
		$base =  new PDO("mysql:host=$host;dbname=$bd",$user,$pass,array(PDO::ATTR_PERSISTENT => true));
		$base->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$base->exec("SET CHARACTER SET utf8");	
			
		$resul = $base->prepare('SELECT * FROM persona WHERE codigo = :codigo');
		$session= $_SESSION['codigo'];
		//echo("aca".$session);
		//exit;
		//$session = '1151318';


		$resul->bindParam(':codigo', $session);
		$resul->execute();
		while($consulta = $resul->fetch(PDO::FETCH_ASSOC)){
			
			$codigo =  $consulta['codigo'];
			$nombre = $consulta['nombre'];
			$apellido = $consulta['apellido'];
			$correo = $consulta['correo'];
			$telefono = $consulta['telefono'];
			$pass = $consulta['password'];
		}

		$resul2 = $base->prepare('SELECT * FROM estudiante WHERE codigo_persona = :codigo_persona');
		$resul2->bindParam(':codigo_persona', $codigo);
		$resul2->execute();
		while($consulta2 = $resul2->fetch(PDO::FETCH_ASSOC)){
			$codigoPrograma =  $consulta2['codigo_programa'];
			$codigoPerso = $consulta2['codigo_persona'];
		}

		$resul3 = $base->prepare('SELECT * FROM programa WHERE codigo = :codigo');
		$resul3->bindParam(':codigo', $codigoPrograma);
		$resul3->execute();
		while($consulta3 = $resul3->fetch(PDO::FETCH_ASSOC)){
			$nombreProgra = $consulta3['nombre'];
		}
	?>
<!DOCTYPE html>
<html>
<head>
	<title>Actualizar Datos Estudiante</title>
</head>
<body>
	<div class="col-sm-9 col-xs-8">
		<div class="contenedor-form">
			<h2>ACTUALIZAR DATOS</h2>
			<span class="required_notification">* Datos requeridos</span>
			<form action="../../php/actualizapersona.php" method="post" name="actualizar">
				
				<input type="text" 		name="nombre" 		value="<?php echo $nombre; ?>">
				
				<input type="text" 		name="apellido" 	value="<?php echo $apellido; ?>">
				
				<input type="text" 		name="nombreProgra" value="<?php echo $nombreProgra; ?>" readonly="readonly">
				
				<input type="text"  	name="codigo" 		value="<?php echo $codigo; ?>" readonly="readonly">
				
				<input type="email" 	name="correo" 		value="<?php echo $correo; ?>">
				
				<input type="text" 		name="telefono" 	value="<?php echo $telefono; ?>">
				
				<input type="password" 	name="password" 	value="<?php echo $pass; ?>">
				
				<input type="submit" value="Guardar" onclick="">
				
				<a href="estudianteindex.html"><button class="submit" type="button">Cancelar</button></a>
			</form>
		</div>
	</div>
</body>
</html>
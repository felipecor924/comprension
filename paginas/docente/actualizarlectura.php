<?php
	include"../../php/conexion.php";
	session_start();
	$base =  new PDO("mysql:host=$host;dbname=$bd",$user,$pass,array(PDO::ATTR_PERSISTENT => true));
	$base->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$base->exec("SET CHARACTER SET utf8");

	$resultado = $base->prepare("SELECT * FROM lectura l WHERE l.codigo_docente=:codigo	ORDER BY l.id");
	$session= $_SESSION['codigo'];
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
			<h2>ACTUALIZAR LECTURA</h2>
			<span class="required_notification">* Datos requeridos</span>
			<form action="actualizarlec.php" method="post" name="actualizarlect">
				<select name="id_lectura" id="id_lectura">
					<option id="" selected value="0">Elija la Lectura</option>
					<?php 
						while($registro =$resultado->fetch(PDO::FETCH_ASSOC)){
							$id =  $registro['id'];
							$titulo =  $registro['titulo'];
					?>
					<option id="" name="codigo" value="<?php echo $id; ?>"><?php echo $titulo;
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
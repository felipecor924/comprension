<?php
		include"../../php/conexion.php";
		session_start();
		$base =  new PDO("mysql:host=$host;dbname=$bd",$user,$pass,array(PDO::ATTR_PERSISTENT => true));
		$base->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$base->exec("SET CHARACTER SET utf8");

		$resultado = $base->prepare("SELECT l.id, l.codigo_docente, l.titulo, l.descripcion 
		FROM lectura l
		WHERE l.codigo_docente=:codigo
		ORDER BY l.id");
		$session= $_SESSION['codigo'];
		$resultado->bindParam(':codigo', $session);
		$resultado->execute();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Agregar Pregunta</title>
</head>

<body>
	<div class="col-sm-9 col-xs-8">
		<div class="contenedor-form ">
			<h2>AGREGAR PREGUNTA</h2>
			<span class="required_notification">* Datos requeridos</span>
			<form action="../../php/ingresarpregunta.php" method="post" name="agregarpre">
				
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

				<input type="text" name="pregunta1" placeholder="Pregunta1" required>

				<input type="text" name="pregunta2" placeholder="Pregunta2" required>

				<input type="text" name="pregunta3" placeholder="Pregunta3" required>

				<input type="text" name="pregunta4" placeholder="Pregunta4" required>

				<input type="text" name="pregunta5" placeholder="Pregunta5" required>

				<input type="hidden" name="codigo_docente" value="<?php echo $session; ?>">

				<input type="submit" name="" value="Agregar" onclick="">
				
				<a href="pregunta.html"><button class="submit" type="button">Cancelar</button></a>
			</form>
		</div>
	</div>
</body>
</html>
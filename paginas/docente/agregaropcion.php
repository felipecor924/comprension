<?php
		include"../../php/conexion.php";
		session_start();
		$base =  new PDO("mysql:host=$host;dbname=$bd",$user,$pass,array(PDO::ATTR_PERSISTENT => true));
		$base->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$base->exec("SET CHARACTER SET utf8");

		$resultado = $base->prepare("SELECT * 
		FROM pregunta p
		WHERE p.codigo_docente=:codigo
		ORDER BY p.id");
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
			<h2>AGREGAR OPCION</h2>
			<span class="required_notification">* Datos requeridos</span>
			<form action="../../php/ingresaropcion.php" method="post" name="agregaropc">
				
				<select name="id_pregunta" id="id_pregunta">
					<option id="" selected value="0">Elija la Lectura</option>
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

				<input type="text" name="opcion1" placeholder="opcion1" required>
				<input type="radio" name="respuesta1" checked value="FALSE">INCORRECTO
  				<input type="radio" name="respuesta1" value="TRUE">CORRECTO

				<input type="text" name="opcion2" placeholder="opcion2" required>
				<input type="radio" name="respuesta2" checked value="FALSE">INCORRECTO
  				<input type="radio" name="respuesta2" value="TRUE">CORRECTO

				<input type="text" name="opcion3" placeholder="opcion3" required>
				<input type="radio" name="respuesta3" checked value="FALSE">INCORRECTO
  				<input type="radio" name="respuesta3" value="TRUE">CORRECTO

				<input type="text" name="opcion4" placeholder="opcion4" required>
				<input type="radio" name="respuesta4" checked value="FALSE">INCORRECTO
  				<input type="radio" name="respuesta4" value="TRUE">CORRECTO

				<input type="submit" name="" value="Agregar" onclick="">
				
				<a href="opcion.html"><button class="submit" type="button">Cancelar</button></a>
			</form>
		</div>
	</div>
</body>
</html>
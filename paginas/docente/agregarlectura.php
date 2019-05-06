<?php
		include"../../php/conexion.php";
		session_start();
		$base =  new PDO("mysql:host=$host;dbname=$bd",$user,$pass,array(PDO::ATTR_PERSISTENT => true));
		$base->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$base->exec("SET CHARACTER SET utf8");

		$resultado = $base->prepare("SELECT a.nombre, a.codigo, a.codigo_programa, a.semestre 
		FROM asignatura a INNER JOIN asignatura_docente ad ON a.codigo=ad.codigo_asignatura
		WHERE ad.codigo_docente=:codigo
		ORDER BY a.semestre");
		$session= $_SESSION['codigo'];
		$resultado->bindParam(':codigo', $session);
		$resultado->execute();

		$resultado2 = $base->prepare("SELECT * FROM tipo_lectura");
		$resultado2->execute();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Agregar Lectura</title>
</head>
<body>
	<div class="col-sm-9 col-xs-8">
		<div class="contenedor-form">
			<h2>AGREGAR LECTURA</h2>
			<span class="required_notification">* Datos requeridos</span>
			<form action="../../php/ingresarlec.php" method="post" name="actualizar">

				<select name="codigo_asignatura" id="codigo_asignatura">
					<option id="" selected value="0">Elija la Asignatura</option>
					<?php 
						while($registro =$resultado->fetch(PDO::FETCH_ASSOC)){
							$nombre =  $registro['nombre']; 
							$codigo =  $registro['codigo']; 
							$codigo_programa =  $registro['codigo_programa']; 
					?>
					<option id="" name="codigo" value="<?php echo $codigo; ?>">
					<?php echo $codigo_programa;?><?php echo $codigo; ?> - <?php echo $nombre; 
					?>
					</option>
					<?php 
						} 
					?>
				</select>
				
				<input type="text" name="titulo" placeholder="Titulo" required />
			
				<textArea name="descripcion" placeholder="Descripcion" required></textArea> 

				<select name="tipo_lectura">
					<option id="" selected value="0>">Seleccione un Tipo de Lectura</option>
					<?php
						while($registro2 =$resultado2->fetch(PDO::FETCH_ASSOC)){
							$descripcion =  $registro2['descripcion']; 
							$id =  $registro2['id']; 
					?>
					<option id="" value="<?php echo $id; ?>"><?php echo $descripcion; ?></option>
					<?php 
						} 
					?>
				</select>

				<input type="hidden" name="codigo_docente" value="<?php echo $session; ?>">

				<input type="submit" name="" value="Guardar" onclick="">
				
				<a href="lectura.html"><button class="submit" type="button">Cancelar</button></a>
			</form>
		</div>
	</div>
</body>
</html>
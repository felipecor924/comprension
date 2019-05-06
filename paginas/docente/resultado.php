<?php
	include"../../php/conexion.php";
	session_start();
	$base =  new PDO("mysql:host=$host;dbname=$bd",$user,$pass,array(PDO::ATTR_PERSISTENT => true));
	$base->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$base->exec("SET CHARACTER SET utf8");
	$session= $_SESSION['codigo'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Listado de Pruebas</title>
</head>

<body>
	<div class="col-sm-9 col-xs-8">
		<div class="contenedor-form">
			<h2>RESULTADOS</h2>
			<form>
				<div align="center" class="col-sm-2 col-xs-8">
					<a href="docenteindex.html"><button class="submit" type="button">Volver</button></a>
				</div>
				<table>
					<thead>
						<tr>
						<th>CODIGO ESTUDIANTE</th>
						<th>NOMBRE LECTURA</th>
						<th>NOMBRE ASIGNATURA</th>
						<th>FECHA</th>
						<th>CORRECTAS</th>
						<th>INCORRECTAS</th>
						<th>TOTAL</th>
					</tr>	
					</thead>
					<tbody>
						<<?php 
						$resultado = $base->prepare("SELECT * FROM prueba p WHERE p.codigo_docente=$session");
						$resultado->execute();
						while($registro =$resultado->fetch(PDO::FETCH_ASSOC)){
							$codigo_persona =  $registro['codigo_persona'];
							$fecha =  $registro['fecha'];
							$correctas =  $registro['correctas'];
							$incorrectas =  $registro['incorrectas'];
							$contador =  $registro['contador'];
							$codigo_asignatura=$registro['codigo_asignatura'];
							$id_lectura=$registro['id_lectura'];

							$resultado2 = $base->prepare("SELECT * FROM asignatura a WHERE a.codigo=$codigo_asignatura");
							$resultado2->execute();
							while($registro =$resultado2->fetch(PDO::FETCH_ASSOC)){
								$nombre_asignatura=$registro['nombre'];
							

								$resultado3 = $base->prepare("SELECT * FROM lectura l WHERE l.id=$id_lectura");
								$resultado3->execute();
								while($registro =$resultado3->fetch(PDO::FETCH_ASSOC)){
									$nombre_lectura=$registro['titulo'];
						?>
						<tr>
							<td><?php echo $codigo_persona; ?></td>
							<td><?php echo $nombre_lectura; ?></td>
							<td><?php echo $nombre_asignatura; ?></td>
							<td><?php echo $fecha; ?></td>
							<td><?php echo $correctas; ?></td>
							<td><?php echo $incorrectas; ?></td>
							<td><?php echo $contador; ?></td>
						</tr>
						<?php
								}
							}
						}
						 ?>
					</tbody>
				</table>		
			</form>
		</div>
	</div>
</body>
</html>
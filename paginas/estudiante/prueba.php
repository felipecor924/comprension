<?php
	include"../../php/conexion.php";
	session_start();
	$base =  new PDO("mysql:host=$host;dbname=$bd",$user,$pass,array(PDO::ATTR_PERSISTENT => true));
	$base->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$base->exec("SET CHARACTER SET utf8");

	$id_asignatura=$_POST['id_asignatura'];
	$session= $_SESSION['codigo'];

	$resultado = $base->prepare("SELECT * FROM asignatura a WHERE a.codigo=$id_asignatura");
	$resultado->execute();
	while($registro =$resultado->fetch(PDO::FETCH_ASSOC)){
		$codigo_programa =  $registro['codigo_programa'];
		$nombre_asignatura=$registro['nombre'];
	}


	$resultado2 = $base->prepare("SELECT * FROM lectura l WHERE l.codigo_asignatura=$id_asignatura");
	$resultado2->execute();
	while($registro =$resultado2->fetch(PDO::FETCH_ASSOC)){
		$id_lectura =  $registro['id'];
		$codigo_docente =  $registro['codigo_docente'];
		$titulo =  $registro['titulo'];
		$descripcion =  $registro['descripcion'];
		$codigo_asig_lec=$registro['codigo_asignatura'];
	}


	$resultado3 = $base->prepare("SELECT * FROM pregunta p WHERE p.id_lectura=$id_lectura");
	$resultado3->execute();
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>pagina principal Pruebas</title>

	<meta charset="utf-8">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="../../css/estilo.css">
</head>
<body>
	<div class="todo">
		<div class="defecto">
			<div class="row">
				<div class="col-sm-4 col-xs-5">
					<a href="estudianteindex.html">
						<img title="UFPS" src="https://ww2.ufps.edu.co/public/imagenes/template/header/logo_ufps.png" />
					</a>
				</div>
				<div class="col-sm-8 col-xs-7" >
					<h2 align="center">SISTEMA DE INFORMACIÓN PARA EL MEJORAMIENTO DE COMPRESIÓN LECTORA</h2>
				</div>
			</div>
		</div>
		<div class="informacion">
			<div class="row">
				<div class="menu">
					<div class="col-sm-3 col-xs-4">
						<a href="#" class=btn-menu>Menu<i class="icono fas fa-bars"></i></a>
						<ul class="navegacion">
							<li><a href="estudianteindex.html" class=estudianteindex><i class="icono izquierda fas fa-home"></i>Inicio</a></li>
							
							<li><a href="#" class="realizaprueba"><i class="icono izquierda fas fa-registered"></i>Realizar Prueba</a></li>
							
							<li><a href="#" class="actualizar"><i class="icono izquierda fas fa-sign-in-alt"></i>Actualizar Datos</a></li>
							
							<li><a href="#" class="asignatura"><i class="icono izquierda"></i>Registrar Asignatura</a></li>
							
							<li><a href="#" class="resultado"><i class="icono izquierda fas fa-sign-in-alt"></i>Resultados</a></li>

							<li><a href="#" class="contacto"><i class="icono izquierda fas fa-envelope"></i>Contacto</a></li>
							
							<li><a href="../../index.html" class=""><i class="icono izquierda fas fa-sign-out-alt"></i>Cerrar Sesion</a></li>
						</ul>
					</div>
				</div>
				<div class=contenedor align="center">
					<div class="col-sm-9 col-xs-8">
						<div class="contenedor-form">
							<h2> <?php echo $nombre_asignatura; ?> CUESTIONARIO</h2>
							<form action="../../php/contarprueba.php" method="post" name="prueba">

								<input type="text" name="" value="<?php echo $titulo; ?>" readonly="readonly">

								<textarea readonly="readonly"><?php echo $descripcion; ?></textarea>

								<?php
								while($registro =$resultado3->fetch(PDO::FETCH_ASSOC)){
									$desc_pregunta =  $registro['desc_pregunta'];
									$id =  $registro['id'];
								?>
								<input type="text" name="" value="<?php echo $desc_pregunta; ?>" readonly="readonly">
								<div align="left">
								<?php
									$resultado4 = $base->prepare("SELECT * FROM opcion o WHERE o.id_pregunta=$id");
									$resultado4->execute();
									while($registro =$resultado4->fetch(PDO::FETCH_ASSOC)){
									$opcion =  $registro['opcion'];
									$id_pregunt=$registro['id_pregunta'];
								?>
								<input type="radio" name="<?php echo $id_pregunt; ?>" value="<?php echo $opcion; ?>"required><?php echo $opcion;?><br>
								<?php
								}?>
								</div>
								<?php
								}
								?>

								<input type="hidden" name="codigo_asignatura" value="<?php echo $id_asignatura; ?>">

								<input type="hidden" name="codigo_programa" value="<?php echo $codigo_programa; ?>">

								<input type="hidden" name="codigo_persona" value="<?php echo $session; ?>">

								<input type="hidden" name="id_lectura" value="<?php echo $id_lectura; ?>">

								<input type="hidden" name="codigo_docente" value="<?php echo $codigo_docente; ?>">

								<input type="hidden" name="codigo_asignatura_lec" value="<?php echo $codigo_asig_lec; ?>">

								<input type="submit" value="Enviar">
							</form>
						</div>
					</div>
				</div>
			</di$id_asignaturadiv>
	</div>
	<footer class="footer">
			<h3 align="center">2018© All Rights Reserved - Universidad Francisco de Paula Santander</h3>
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="../../js/funciones.js"></script>
</body>
</html>
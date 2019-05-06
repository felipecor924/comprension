<?php
	include"../../php/conexion.php";
	session_start();
	$base =  new PDO("mysql:host=$host;dbname=$bd",$user,$pass,array(PDO::ATTR_PERSISTENT => true));
	$base->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$base->exec("SET CHARACTER SET utf8");

	$id_lectura=$_POST['id_lectura'];
	$session= $_SESSION['codigo'];

	$resultado = $base->prepare("SELECT * FROM lectura l WHERE l.id=$id_lectura");
	$resultado->execute();
	while($registro =$resultado->fetch(PDO::FETCH_ASSOC)){
		$titulo=$registro['titulo'];
		$descripcion=$registro['descripcion'];
		$tipo_lectura=$registro['tipo_lectura'];
		$codigo_asignatura=$registro['codigo_asignatura'];
	}

	$resultado2 = $base->prepare("SELECT a.nombre, a.codigo, a.codigo_programa, a.semestre 
	FROM asignatura a INNER JOIN asignatura_docente ad ON a.codigo=ad.codigo_asignatura
	WHERE ad.codigo_docente=:codigo
	ORDER BY a.semestre");
	$resultado2->bindParam(':codigo', $session);
	$resultado2->execute();

	$resultado3 = $base->prepare("SELECT * FROM tipo_lectura");
	$resultado3->execute();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Pagina de Lectura</title>

	<meta charset="utf-8">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="../../CSS/estilo.css">

</head>
<body>
	<div class="todo">
		<div class="defecto">
			<div class="row">
				<div class="col-sm-4 col-xs-5">
					<a href="docenteindex.html">
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
							<li><a href="docenteindex.html" class=docenteindex><i class="icono izquierda fas fa-home"></i>Inicio</a></li>
							
							<li><a href="#" class="lectura"><i class="icono izquierda fas fa-book-reader"></i>Lectura</a></li>
							
							<li><a href="#" class="pregunta"><i class="icono izquierda fas fa-book-reader"></i>Pregunta</a></li>
							
							<li><a href="#" class="opcion"><i class="icono izquierda fas fa-book-reader"></i>Opcion</a></li>

							<li><a href="#" class="actualizar"><i class="icono izquierda fas fa-clipboard-list"></i>Actualizar Datos</a></li>

							<li><a href="#" class="resultado"><i class="icono izquierda fas fa-clipboard-list"></i>Resultados</a></li>
							
							<li><a href="#" class="contacto"><i class="icono izquierda fas fa-envelope"></i>Contacto</a></li>
							
							<li><a href="../../index.html" class=""><i class="icono izquierda fas fa-sign-out-alt"></i>Cerrar Sesion</a></li>
						</ul>
					</div>
				</div>
				<div class=contenedor align="center">
					<div class="col-sm-9 col-xs-8">
						<div class="contenedor-form ">
							<h2>ACTUALIZAR LECTURA</h2>
							<span class="required_notification">* Datos requeridos</span>
							<form action="../../php/actualizarlect.php" method="post" name="actualizarlect">
								
								<select name="codigo_asignatura" id="codigo_asignatura">
									<?php 
										while($registro =$resultado2->fetch(PDO::FETCH_ASSOC)){
											$nombre =  $registro['nombre']; 
											$codigo =  $registro['codigo']; 
											$codigo_programa =  $registro['codigo_programa']; 
											if ($codigo_asignatura==$codigo) {
									?>
									<option id="" name="codigo" selected value="<?php echo $codigo; ?>">
										<?php echo $codigo_programa;?><?php echo $codigo; ?> - <?php echo $nombre;?>
									</option> 
									<?php
										}else{
									?>
									<option id="" name="codigo" value="<?php echo $codigo; ?>">
										<?php echo $codigo_programa;?><?php echo $codigo; ?> - <?php echo $nombre;?>
										</option>
									<?php
										} 
									} 
									?>
								</select>

								<input type="text" name="titulo" placeholder="Titulo" value="<?php echo $titulo; ?>" required />
							
								<textArea name="descripcion" placeholder="Descripcion" required><?php echo $descripcion; ?></textArea> 
								
								<select name="tipo_lectura">
									<?php
										while($registro =$resultado3->fetch(PDO::FETCH_ASSOC)){
											$descripcion =  $registro['descripcion']; 
											$id =  $registro['id']; 
											if ($tipo_lectura==$id) {
									?>
									<option id="" selected value="<?php echo $id; ?>"><?php echo $descripcion; ?></option>
									<?php			
										}else{
									?>
									<option id="" value="<?php echo $id; ?>"><?php echo $descripcion; ?></option>
									<?php 
										}
									} 
									?>
								</select>

								<input type="hidden" name="codigo_docente" value="<?php echo $session; ?>">

								<input type="hidden" name="id_lectura" value="<?php echo $id_lectura?>">

								<input type="submit" name="" value="Actualizar" onclick="">
								
								<a href="lectura.html"><button class="submit" type="button">Cancelar</button></a>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer class="footer">
			<h3 align="center">2018© All Rights Reserved - Universidad Francisco de Paula Santander</h3>
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="../../JS/funciones.js"></script>
</body>
</html>
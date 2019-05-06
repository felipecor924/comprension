<head>
	<title>Pagina de Lectura</title>
</head>
<body>
	<?php
	include"../php/conexion.php";
	$base =  new PDO("mysql:host=$host;dbname=$bd",$user,$pass,array(PDO::ATTR_PERSISTENT => true));
	$base->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$base->exec("SET CHARACTER SET utf8");
	?>
	
	<div class="col-sm-9 col-xs-8">
		<div class="contenedor-form">
			<h2>REGISTRO</h2>
			<span class="required_notification">* Datos requeridos</span>
			<form action="php/registro.php" method="post" name="registrar">
				<input name="nombre" type="text" placeholder="Nombre" required />
				
				<input name="apellido" type="text" placeholder="Apellido" required />
				
				<select name="tipo" id="tipo" onchange="ShowSelected();" class="tipo-usuario">
					<option value="0" disabled selected>Tipo</option>
					<option value="1">Docente</option>
					<option value="2">Estudiante</option>
				</select>
				
				<select id = "departamentos" name= "departamento" >
					<option  selected value="0">Departamentos</option>
					<?php 
					  $resultado = $base->prepare("SELECT * FROM departamento");
					  $resultado->execute();
					  while($registro =$resultado->fetch(PDO::FETCH_ASSOC)){
					  $nombre =  $registro['nombre']; 
					?>
					<option   value = "<?php echo $nombre; ?>"><?php echo $nombre; ?></option>
					<?php } ?>
				</select>
				<select id = "programas" name="programa" >
					<option  selected value="0">Programas</option>
					<?php 
					  $resultado = $base->prepare("SELECT * FROM programa");
					  $resultado->execute();
					  while($registro =$resultado->fetch(PDO::FETCH_ASSOC)){
					  $nombre =  $registro['nombre'];
					  $codigo =  $registro['codigo'];
					   ?>
					<option   value = "<?php echo $codigo; ?>"><?php echo $nombre; ?></option>
					<?php } ?>
				</select>
				
				<input name="codigo" type="text" placeholder="Codigo" required />
				
				<input name="telefono" type="text" placeholder="Telefono" required />
						
				<input type="email" name="email" placeholder="Correo" required />
						
				<input type="password" name="password" placeholder="Contraseña" required />
						
				<button class="submit" type="submit" onclick="">Guardar</button>
						
				<a href="index.html"><button class="submit" type="button">Cancelar</button></a>
			</form>
		</div>
	</div>
</body>
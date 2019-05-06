$(document).ready(function(){
	$('.navegacion li:has(ul)').click(function(e){
		e.preventDefault();
		if ($(this).hasClass('activado')) {
			$(this).removeClass('activado');
			$(this).children('ul').slideUp();
		}else{
			$('.navegacion li ul').slideUp();
			$('.navegacion li').removeClass('activado');
			$(this).addClass('activado');
			$(this).children('ul').slideDown();
		}
	});


});

function ShowSelected(){
var combo = document.getElementById("tipo");
var depar = document.getElementById('departamentos');
var progra = document.getElementById("programas");
var selected = combo.options[combo.selectedIndex].text;
	if(selected=='Docente'){
		depar.style.display = 'block';
		progra.style.display = 'none';
		//document.querySelector('#pro-dep').innerText = 'Departamentos';	
	}
	if(selected=='Estudiante'){
		depar.style.display = 'none';
		progra.style.display = 'block';
		//document.querySelector('#pro-dep').innerText = 'Programas';
		
	}
}



$('.btn-menu').click(function(){
	$('.menu .navegacion').slideToggle();
});

$(".registro").click(function(event){
	$(".contenedor").load('paginas/registro.php');
});

$(".iniciar").click(function(event){
	$(".contenedor").load('paginas/iniciar.html');
});


$(".contacto").click(function(event){
	$(".contenedor").load('paginas/contacto.html');
});


/*otros*/



/*estudiante*/
	$(".prueba").click(function(event){
		$(".contenedor").load('prueba.html');
	});
	$(".realizarprueba").click(function(event){
		$(".contenedor").load('realizarprueba.php');
	});
	$(".actualizar").click(function(event){
		$(".contenedor").load('actualizar.php');
	});
	$(".asignatura").click(function(event){
		$(".contenedor").load('asignatura.php');
	});
	$(".resultado").click(function(event){
		$(".contenedor").load('resultado.php');
	});

/*Docente*/

	/*Lectura*/
	$(".agregarlec").click(function(event){
		$(".contenedor").load('agregarlectura.php');
	});
	$(".eliminarlec").click(function(event){
		$(".contenedor").load('eliminarlectura.php');
	});
	$(".actualizarlec").click(function(event){
		$(".contenedor").load('actualizarlectura.php');
	});


	/*Pregunta*/
	$(".agregarpre").click(function(event){
		$(".contenedor").load('agregarpregunta.php');
	});
	$(".eliminarpre").click(function(event){
		$(".contenedor").load('eliminarpregunta.php');
	});
	$(".actualizarpre").click(function(event){
		$(".contenedor").load('actualizarpregunta.php');
	});

	/*Opcion*/
	$(".agregaropc").click(function(event){
		$(".contenedor").load('agregaropcion.php');
	});
	$(".eliminaropc").click(function(event){
		$(".contenedor").load('eliminaropcion.php');
	});
	$(".actualizaropc").click(function(event){
		$(".contenedor").load('actualizaropcion.php');
	});
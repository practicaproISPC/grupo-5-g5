<!DOCTYPE html>
<!--
	Shine by TEMPLATE STOCK
	templatestock.co @templatestock
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->

<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Test de finanzas personales</title>

		
		<!-- WEB FONTS -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:100,300,100italic,400,300italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
		
		<!-- BOOTSTRAP -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- FONT AWESOME -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- CUSTOM STYLING -->
		<link href="css/styles.css" rel="stylesheet">
		<!-- PRELOADER -->	
		<link href="css/loader.css" rel="stylesheet">
		
			
	</head>
	
<body>
	<!-- PRELOADER 
		<div id="loader-wrapper">
			<div id="loader"><div class="sk-spinner sk-spinner-cube-grid"><div class="sk-cube"></div><div class="sk-cube"></div><div class="sk-cube"></div><div class="sk-cube"></div><div class="sk-cube"></div><div class="sk-cube"></div><div class="sk-cube"></div><div class="sk-cube"></div><div class="sk-cube"></div></div></div>
		</div>	-->
		
	<!-- HEADER -->
	<section id="header">
		<div class="container">
			<div class="row text-center">
				<div class="col-md-8">
					<!--<img class="logo" src="images/logo.png" />-->
					<h1 class="white-text">Bienvenido/a al test de finanzas personales</h1>
					<h4 class="white-text">Descubre en qué tipo de gastos se nos va mayormente el dinero, y haz frente a ellos!</h4>
					<div id="countdown" class="white-text"></div>
				</div>
			</div>
		</div>
		<div class="animation">
		<a class="arrow-down-animation" data-scroll href="#about"><i class="fa fa-angle-down"></i></a>
		</div>
	</section>
<!-- HEADER ENDS -->


    <!-- TEST -->

	<main>
		<div id="divHablarDeDinero">
			<form ><!-- eliminar contenido en deshuso de action y method-->
				<h2>En este test vamos a hablar de dinero,<br>
				¿estás dispuesto/a a colocar datos sobre montos de ingresos y gastos?</h2>
				<label><input type="radio" name="rDatosDinero" id="rDatosDineroSi" value="s" checked>Si </label><br> <!--agregar values / cambiar name-->
				<label><input type="radio" name="rDatosDinero" id="rDatosDineroNo" value="n">No </label><br> <!--agregar values-->
				<!--"ocultarDiv('divHablarDeDinero')"-->
				<!--SI DICE QUE NO: Página estática con recomendaciones sobre apps de manejo de consumo y otras sobre inversión  
				/ O, si estamos holgados de tiempo, Test secundario-->
				<br>
				<button type="button" onclick="ocultarSegunSeleccion1()"><b>Continuar</b></button> <!--agregar boton-->
				<br><br>
				<br>
			</form>
			
		</div>

		<div id="ultimoMes" style="display: none;">
			<form >          
				
				<h2>Basados en el último mes:</h2>

				<h3>¿Cuántos fueron tus ingresos?</h3>
				<label><input type="number" name="text" id="ingreso"></label>
				
				<h2>Teniendo en cuenta solo lo que gastaste de los ingresos indicados en el cuadro anterior:</h2>
				<h3>¿Cuánto gastaste en consumos básicos?</h3>
				<label><input type="number" name="text" id="consumoBasico"></label><br><br>
				<label><input type="checkbox" name="cbxNoSabe" id="noSabe" onclick="deshabConCheckbox('noSabe','consumoBasico')">No estoy seguro</label> <!--Name representativo-->

				<h3>¿Cuánto gastaste en consumos personales?</h3>
				<label><input type="number" name="text" id="consumoPersonal"></label><br><br>
				<label><input type="checkbox" name="cbxNoSabe" id="noSabe1" onclick="deshabConCheckbox('noSabe1', 'consumoPersonal')">No estoy seguro</label>
				<br><br>
				<button type="button" onclick="conoceGastos()"><b>Continuar</b></button> <!--agregar boton-->
				<br><br>
				<br>
				<!--<h3>¿Cuánto gastaste en otros consumos?</h3>  
				<label><input type="text" name="text" id="otrosConsumos"></label><br><br>
				<label><input type="checkbox" name="checkbox" id="noSabe2">No estoy seguro</label>--><!--BORRARLA-->
				<!--Si hay al menos un “No estoy seguro” - > nos vamos al primer resultado del test 
				(recomendarle que pase un mes registrando más minuciosamente en qué gasta)-->
			</form>
			
		
		</div>
		<div id="deudas" style="display: none;">
		  <form>
				<h3>*¿Tenés alguna deuda judicializada o en plan de pago negociado con un estudio?</h3>
				<label><input type="radio" name="judi" id="si1">Si </label><br>
				<label><input type="radio" name="judi" id="no1" checked>No </label><br>
				
				<h3>*¿En el último mes, solicitaste un préstamo para pagar alguna otra deuda?</h3>
				<label><input type="radio" name="prest" id="si2">Si </label><br>
				<label><input type="radio" name="prest" id="no2" checked>No </label><br>

				<h3>¿Utilizas tarjeta de crédito?</h3>
				<!--<label><input type="radio" name="tarj" id="si3" onclick="ocultarTarjeta()">Si </label><br>
				<label><input type="radio" name="tarj" id="no3" checked>No </label><br>-->
				<label><input type="checkbox" name="usaTarjeta" id="usaTarjeta" onclick="ocultarTarjeta()">Uso tarjeta de crédito</label>
				<div id="minimoTarjeta" style="display: none;">
					<!--Si la respuesta anterior es Si, se activa la siguiente pregunta-->
					<h3>*¿El último mes, abonaste el mínimo o pediste una refinanciación a tu tarjeta de crédito?</h3>
					<label><input type="radio" name="minimref" id="si4">Si </label><br>
					<label><input type="radio" name="minimref" id="no4" checked>No </label><br>  
				</div>
				<br><br>
				<button type="button" onclick="estaEndeudado()"><b>Continuar</b></button> <!--agregar boton-->
				<br><br>
				<br>
			</form>
			
		</div>
		<div id="ahorros" style="display: none;">
			<form>
				<!--Si alguna pregunta con * es verdadera, va a los tips para salir de las deudas.-->
				
				<!--Si estan todos los montos-->
				<h3 id="xAhorros">X</h3>
				<h3>¿Llegaste con esos ahorros a fin de mes?</h3>
				<label><input type="radio" name="radio" id="si5" checked>Si </label><br>
				<label><input type="radio" name="radio" id="no5">No </label><br>
				<br>
				<button type="button" onclick="tieneAhorros()"><b>Continuar</b></button> <!--agregar boton-->
				<!--Si no tuvo ningún no estoy seguro, y todas las * son no, y SI tiene ahorros, se le dan Tips para invertir.
				Si no tuvo ningún no estoy seguro, y todas las * son no, y NO tiene ahorros, está en la carrera de la rata.-->
				<br><br>
				<br>
			</form>
		</div>
	</main>
	
	<!-- FOOTER -->
	<?php
		include ("footer.php");
		?>
	<!-- FOOTER ENDS -->	

	
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		<!-- SMOOTH SCROLL -->
		<script src="js/smooth-scroll.min.js"></script>
		<!-- PARALLAX IMG -->
		<script src="js/jquery.parallax-1.1.3.js"></script>
		<!-- SCROLL REVEAL -->
		<script src="js/scrollReveal.min.js"></script>
		<!-- FUNCTIONS -->
		<script src="js/functions.js"></script>
		<!-- Funciones del test-->
		<script src="js/testScript.js"></script>

</body>
</html>
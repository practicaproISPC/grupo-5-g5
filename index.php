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
		</div>	
	-->	
	<!-- HEADER -->
		<section id="header">
			<div class="container">
				<div class="row text-center">
					<div class="col-md-8">
						<!--<img class="logo" src="images/logo.png" />-->
						<h1 class="white-text">Test de finanzas personales</h1>
						<h2 class="white-text">Te contamos los beneficios de administrar correctamente el dinero.</h2>
						<div id="countdown" class="white-text"></div>
					</div>
				</div>
			</div>
			<div class="animation">
			<a class="arrow-down-animation" data-scroll ><i class="fa fa-angle-down"></i></a>
			</div>
		</section>
	<!-- HEADER ENDS -->
		
	<!-- ABOUT -->
		<section id="about">
			<div class="container">
				<div class="row text-center">
					<!-- Section 1 -->
					<div data-sr="enter top over 1s, wait 0.3s, move 24px, reset" class="col-md-4">
						<i class="fa fa-pencil-square-o"></i>
						<h3>Mayor efectividad en obtener, utilizar y proteger los recursos financieros.</h3>
						<div class="colored-line-small-center"></div>
						<p>¿Alguna vez te has preguntado por qué los ricos se hacen cada vez más ricos?. La respuesta es porque saben llevar un correcta administración de sus finanzas o tienen a un profesional que lo hace por ellos. La clave está en aprender a manejar el dinero y una vez que lo consigas, verás cómo se vuelve más sencillo ir alcanzando cada uno de los objetivos financieros que te propongas.</p>
					</div>
					<!-- Section 2 -->
					<div data-sr="enter bottom over 1s, wait 0.3s, move 24px, reset" class="col-md-4 middle">
						<i class="fa fa-heart-o"></i>
						<h3>Mejorar nuestras relaciones personales.</h3>
						<div class="colored-line-small-center"></div>						
						<p>¿Quién no discutió alguna vez por temas de dinero? Cabe mencionar que este asunto está entre los principales causales de separación en parejas, según algunos estudios.</p>						
					</div>
					<!-- Section 3 -->
					<div data-sr="enter top over 1s, wait 0.3s, move 24px, reset" class="col-md-4">
						<i class="fa fa-life-ring"></i>
						<h3>Sensación de libertad financiera sin preocupaciones.</h3>
						<div class="colored-line-small-center"></div>
						<p>Te sentirás mucho más tranquilo en tu vida diaria, porque sabrás que aunque llegue a suceder un incidente como la pérdida de tu empleo, un accidente o enfermedad, sabrás que te encuentras cubierto y podrás continuar con tu vida normalmente una vez que el incidente haya sucedido.</p>						
					</div>
				</div>
			</div>			
		</section>
	<!-- ABOUT ENDS -->
	
	<!-- Infrese al test -->
		<section>
			<h3>Por todo lo mencionado es que te invitamos a realizar el siguiente test completamente gratis que nos permitirá hacer una evaluación del estado de tus finanzas personales. A partir  de tu información brindada podremos regalarte sugerencias de éxito comprobadas para que puedas llevar tu administración al siguiente nivel.</h3>
			<br>
			<button onclick="location.href='FormDatos.php'"><b>ACCEDER AL TEST</b></button>
		</section>
	<!-- Fin ingrese al test -->
	

	
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
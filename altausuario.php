<!DOCTYPE html>
<!--
	Shine by TEMPLATE STOCK
	templatestock.co @templatestock
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Test de finanzas personales - Datos acceso</title>

		
		<!-- WEB FONTS -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:100,300,100italic,400,300italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
		
		<!-- BOOTSTRAP -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- FONT AWESOME -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- CUSTOM STYLING -->
		<link href="css/styles.css" rel="stylesheet">
		<link href="css/styleLoggin.css" rel="stylesheet">
		<!-- CSS MENU LOGGIN -->
		<link href="css/styleMenuLoggin.css" rel="stylesheet">
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
					<h1 class="white-text">Test de Finanzas Personales</h1>
					<h2 class="white-text">Nuevo Administrador</h2>
					<div id="countdown" class="white-text"></div>
				</div>
			</div>
		</div>
		<div class="animation">
		<a class="arrow-down-animation" data-scroll href="#about"><i class="fa fa-angle-down"></i></a>
		</div>
	</section>
<!-- HEADER ENDS -->

    <?php
			session_start();
			if(!isset($_SESSION["ingreso"])){
				
				header("location:adminloggin.php");
			}		
	?>

		<!--MENU LOGGIN-->
		<?php
				readfile('menuLog.php');
			?>
		<!--fIN MENU LOGGIN-->
		
	<!--A base de datos-->
		<?php

			include ("db.php");
			$base= new Database(); /*Esto que no sabía explicar, es la instanciación de la clase database que creamos en el otro archivo*/
			if(isset($_POST) && !empty($_POST)){
				$usuario = $base->sanitize($_POST['user']);  /*Estos llaman a una clase que escapa los caracteres especiales para no romper php*/
				$email = $base->sanitize($_POST['email']);
				$contrasenia = $base->sanitize($_POST['pas']); 
				$res = $base->altaUsuario($usuario, $email, $contrasenia);	
				if($res){
					echo '<script language="javascript">alert("Usuario creado con éxito");</script>';
				}else{
					echo '<script language="javascript">alert("No se pudo dar el alta al usuario");</script>';
				}
			}
			
			/*Realmente no sé cuál de las dos formas es mejor*/
			/*En el archivo alta.php ¿dónde se estaba cerrando la base de datos? */

		?>


	<!--FORMULARIO DATOS PERSONALES/ ACCESO -->

    
        <h1>Alta de un nuevo administrador</h1>
            
        <main>
        <div class="login">
        <form   method="post" >
			
            
            <label for="usuario">Usuario:</label><br>
            <input type="text" name="user" id="user" required><br>
			
			<label for="email">Email:</label><br>
            <input type="email" name="email" id="email" required><br><br>
            
            <label for="pass">Contraseña:</label><br>
            <input type="password" name="pas" id="pas" required><br><br>

			<button type="submit" value="alta"><b>Registrar</b></button>
			
			
            
        </form>
		</div>
        
        </main>
		<br><br><br><br><br>
 	
	
	<!--FIN FORMULARIO DATOS PERSONALES/ ACCESO-->
	

	
	<!-- FOOTER -->
	<?php
		include ("footer.php");
		?>
	<!-- FOOTER ENDS -->	

	
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<!-- Funciones del form datos de contacto-->
		<script src="js/datosContacto.js"></script>
	
		
	



</body>
</html>
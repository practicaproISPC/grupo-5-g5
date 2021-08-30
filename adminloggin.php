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
					<h3 class="white-text">Te contamos los beneficios de administrar correctamente el dinero</h3>
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
			include ("db.php");
			/*
			$persona= new Database();
			if(isset($_POST) && !empty($_POST)){
				$nombre = $persona->sanitize($_POST['nombre']);
				$apellido = $persona->sanitize($_POST['apellido']);
				$mail = $persona->sanitize($_POST['email']);
				$telefono = $persona->sanitize($_POST['telefono']);
				$domicilio = $persona->sanitize($_POST['domicilio']);
				$consulta = $persona->sanitize($_POST['consulta']);
				
				$res = $persona->createCliente($nombre, $apellido, $mail, $telefono, $domicilio, $consulta);
				echo $res;
				if($res){
					echo "Datos insertados con éxito";
					header('Location: Test.php');
				}else{
					echo "No se pudieron insertar los datos";
				}
			}
			*/
					
		?>

	<!--FORMULARIO DATOS PERSONALES/ ACCESO -->
    
        <h1>Loggin administrador</h1>
            
        <main>
        <div class="login">
        <form  method="post" >

    
            
            <label for="usuario">Usuario:</label><br>
            <input type="text" name="usuario" id="usuario" required><br>
            
			<div style="display:inline">
			<span class="inline">
            <label for="pass">Contraseña:</label><br>
            <input type="password" name="pass" id="pass" required>
			</span>
			<span class="inline">
			<button class="btn btn-primary" id="verCon" type="button" onclick="mostrarContrasena()"><i class="fa fa-eye-slash" aria-hidden="true"></i></button>
			</span>
			</div>
           <!--
            <label for="email">Email:</label><br>
            <input type="email" name="email" required><br>-->
   
			<section class="botonEnviar">
				<button type="submit"><b>Enviar</b></button>
			</section>
			<br><br><br>
			
            
        </form>
		</div>
        
        </main>
 	
	
	<!--FIN FORMULARIO DATOS PERSONALES/ ACCESO-->
	

	
	<!-- FOOTER -->
	<?php
		include ("footer.php");
		?>
	<!-- FOOTER ENDS -->	

	
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<!-- Funciones de adminLoggin-->
		<script src="js/adminLoggin.js"></script>
		
	



</body>
</html>

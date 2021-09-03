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
					<h2 class="white-text">Te contamos los beneficios de administrar correctamente el dinero</h2>
					<div id="countdown" class="white-text"></div>
				</div>
			</div>
		</div>
		<div class="animation">
		<span class="arrow-down-animation" ><i class="fa fa-angle-down"></i></span>
		</div>
	</section>
<!-- HEADER ENDS -->
		
		<?php

		header("Content-Type: text/html;charset=utf-8"); //Para corregir ñ y acentos

		include ("db.php");
			$persona= new Database();
			if(isset($_POST) && !empty($_POST)){
				$nombre = $persona->sanitize($_POST['nombre']);
				$apellido = $persona->sanitize($_POST['apellido']);
				$mail = $persona->sanitize($_POST['email']);
				$telefono = $persona->sanitize($_POST['tel']);
				$domicilio = $persona->sanitize($_POST['domicilio']);
				$consulta = $persona->sanitize($_POST['consulta']);

			$check=$persona->checkingresos($mail,$telefono);
			print ( $check==0 );
			if ($check == 0){
				$res = $persona->createCliente($nombre, $apellido, $mail, $telefono, $domicilio, $consulta);
					echo $res;
					if($res){
						echo "Datos insertados con éxito";
						mysqli_close($con);
						header('Location: Test.php');
					}else{
						echo "No se pudieron insertar los datos";
					}
				
			
			}else{
				echo "Los Datos ya están en la Base";
				mysqli_close($con);
				header('Location: Test.php');
						
					
			}
		}

					
		?>

	<!--FORMULARIO DATOS PERSONALES/ ACCESO -->
    
        <h1>Formulario de contacto</h1>
            
        <main>
        
        <form  method="post" >

    
            
            <label for="nombre">Nombre:</label><br>
            <input type="text" name="nombre" id="nombre" required><br>
            
            <label for="apellido">Apellido:</label><br>
            <input type="text" name="apellido" id="apellido" required><br>

           
            <label for="email">Email:</label><br>
            <input type="email" name="email" id="email" required><br>
    
           
            <label for="tel">Teléfono de contacto:</label><br>
            <input type="tel" name="tel" id="tel" required><br>

            
            <label for="domicilio">Domicilio:</label><br>
            <input type="text" name="domicilio" id="domicilio"><br>
			<br>

            <label for="consulta">Tenes alguna consulta?</label><br>
            <textarea cols="40" rows="7" name="consulta" id="consulta"></textarea><br>
			<br>
	    	<p class="pCentrado"><b>***Nunca te solicitaremos claves ni datos de cuentas bancarias</b>, <br>
             códigos confidenciales enviados por SMS o e-mail, <br>
             y tampoco si ganaste un premio o sorteo. No los compartas.</p>

            <label><input type="checkbox" name="checkbox" id="polDatos" required>Acepto Política de datos y Política de Privacidad</label><br>
            <label><input type="checkbox" name="checkbox" id="envioInfo" required>Acepto envío con bonificaciones de información de este tipo </label></p>
			<section class="botonEnviar">
				<button type="submit"><b>Enviar</b></button>
			</section>
			<br><br><br>
			
            
        </form>
        
        </main>
 	
	
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

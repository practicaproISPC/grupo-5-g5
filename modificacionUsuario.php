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
					<h1 class="white-text">Test de Finanzas Personales</h1>
					<h2 class="white-text">Modificar Administrador</h2>
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
	
	<?php


	/*if (isset($_GET['id'])){
		$id=intval($_GET['id']);
	} else {
		header("location:index.php");
	}*/
	?>
				<a  class="botonEnviar" href="cerrar.php"><b>Cerrar Sesion</b></a>
                
                <a  class="botonEnviar" href="administradores.php"><b>Volver</b></a> 
		
				<a  class="botonEnviar" href="vistaCliente.php"><b>Inicio Administradores</b></a> 

	<!--FORMULARIO DATOS PERSONALES/ ACCESO -->

    
        <h1>Modificación de un administrador</h1>
            
        <main>
		
		    <?php
				
				include ("db.php");
				$base= new Database();
				$id=$_GET['Id'];
				if(isset($_POST) && !empty($_POST)){
					$usuario = $base->sanitize($_POST['user']);
					$mail = $base->sanitize($_POST['email']);
					$pass = $base->sanitize($_POST['pas']);
										
										
					$res = $base->updateUsuario($id,$usuario, $mail, $pass);
					if($res){
						$message= "Usuario actualizado con éxito";
						$class="alert alert-success";
						
					}else{
						$message="No se pudieron actualizar los datos del usuario";
						$class="alert alert-danger";
					}
					
					?>
					<div class="<?php echo $class?>">
					  <?php echo $message;?>
					</div>	
						<?php
				}
				$datos_usuario=$base->singleRecordUsuario($id);
				$usuario = $datos_usuario["USUARIO"];
				$mail = $datos_usuario["EMAIL"]; 
				$pass = $datos_usuario["CONTRA"];

			?>
		
		
		
		
		
        <div class="login">
        <form   method="post" >
			
            
            <label for="usuario">Usuario:</label><br>
            <input type="text" name="user" id="user" required value="<?php echo $usuario ?>"><br>
			
			<label for="email">Email:</label><br>
            <input type="email" name="email" id="email" required value="<?php echo $mail ?>"><br><br>
            
            <label for="pass">Contraseña:</label><br>
            <input type="password" name="pas" id="pas" required value="<?php echo $pass ?>"><br><br>

			<button type="submit" value="alta"><b>Modificar</b></button>
			
			
            
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
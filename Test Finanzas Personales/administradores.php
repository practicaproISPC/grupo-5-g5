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
						<h2 class="white-text">Administradores</h2>
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
				// do php stuff
				readfile('menuLog.php');
			?>
		<!--fIN MENU LOGGIN-->
		
				<!-- <a  class="botonEnviar" href="cerrar.php"><b>Cerrar Sesion</b></a>
                
                <a  class="botonEnviar" href="altausuario.php"><b>Alta Administrador</b></a> 
		
				<a  class="botonEnviar" href="vistaCliente.php"><b>Inicio Administradores</b></a>  -->
		
		
		<?php

		include("conexion.php");
		$conexion=$base->query("SELECT * FROM usuario_log");
		$registros=$conexion->fetchAll(PDO::FETCH_OBJ);
		
		?>
	
		<br><br><br>

		<!--TABLA DE VISITANTES TRAIDA DE BD-->
			<table class="table table-bordered">
                <thead style= "background-color: #7fffd4;">
                    <tr>
                        <th>Id</th>
						<th>Nombre</th>
						<th>Email</th>
						<th>Contraseña</th>
						<th></th>
						<th></th>
                    </tr>
                </thead>

		<?php
		foreach($registros as $administrador):?>

			<tbody >
			<tr>
				<td><?php echo $administrador->id_user?></td>
				<td><?php echo $administrador->USUARIO?></td>
				<td><?php echo $administrador->EMAIL?></td>
				<td><?php echo $administrador->CONTRA?></td>
				<td class='button'><a href="bajauser.php?Id=<?php echo $administrador->id_user?>"><input type='button' class='boton' name='del' value='Borrar'></a></td>
				<td class='button'><a  href="modificacionUsuario.php?Id=<?php echo $administrador->id_user?>"><input type='button' class='boton' name='up' value='Modificar'></td>
			</tr>       
    <?php
		endforeach;
		
	?>

                </tbody>
            </table>	
			
		<!--FIN TABLA DE VISITANTES TRAIDA DE BD-->

	
		




        <br><br><br>

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
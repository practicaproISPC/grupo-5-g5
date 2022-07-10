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
						<h1 class="white-text">Test de Finanzas Personales</h1>
						<h2 class="white-text">Acceso Administrador</h2>
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
		
				<!-- <a  class="botonEnviar" href="cerrar.php"><b>Cerrar Sesión</b></a> 
		
			
				<a  class="botonEnviar" href="administradores.php"><b>Administradores</b></a>  -->
		
		

		
		<br><br><br>

		<!--TABLA DE VISITANTES TRAIDA DE BD-->
			<table class="table table-bordered">
                <thead style= "background-color: #7fffd4;">
                    <tr>
                        <th>Nombre</th>
						<th>Apellido</th>
						<th>Email</th>
						<th>Teléfono</th>
						<th>Domicilio</th>
						<th>Consulta</th>
                    </tr>
                </thead>
                 
                <tbody> 
					<?php 
						include ('db.php');
						$base = new Database();
						$listado=$base->readUsuarios();
						while ($row=mysqli_fetch_object($listado)){
							/*printf ("%s (%s)\n", $row->nombre, $row->apellido);*/
							$id=$row->id_visitante;
							$nombre=$row->nombre;
							$apellido = $row->apellido;
							$email = $row->email;
							$telefono = $row->telefono;
							$domicilio = $row->domicilio;
							$consulta = $row->consulta;
						
					?>
						<tr>
							<td><?php echo $nombre;?></td>
							<td><?php echo $apellido;?></td>
							<td><?php echo $email;?></td>
							<td><?php echo $telefono;?></td>
							<td><?php echo $domicilio;?></td>
							<td><?php echo $consulta;?></td>
							<!--
							<td>
								<a href="clienteEditar.php?id=<?php echo $id;?>" class="btn btn-theme" title="Editar" data-toggle="tooltip"><i class="icon-edit"></i>Editar</a>
								<a href="clienteVerUno.php?id=<?php echo $id;?>" class="btn btn-theme" title="Ver" data-toggle="tooltip"><i class="icon-folder-open-alt"></i>Ver</a>
								<a href="clienteEliminar.php?id=<?php echo $id;?>" class="btn btn-danger" title="Eliminar"><i class="icon-remove"></i>Eliminar</a>
							</td>
							-->
						</tr>	
					<?php
						}
					?>
                          
                </tbody>
            </table>	
			<br><br><br>
		<!--FIN TABLA DE VISITANTES TRAIDA DE BD-->

	
		




    

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

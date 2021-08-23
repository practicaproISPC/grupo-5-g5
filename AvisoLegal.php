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
						<h2 class="white-text">Aviso Legal</h2>
						<div id="countdown" class="white-text"></div>
					</div>
				</div>
			</div>
			<div class="animation">
			<a class="arrow-down-animation" data-scroll><i class="fa fa-angle-down"></i></a>
			</div> <br>
		</section>
	<!-- HEADER ENDS -->
	<?php

include ("nombre.php"); 


print "
		
	<br> <p> El objetivo de la web es el de ofrecer contenido, entretenimiento y servicios relacionados con las Finanzas Personales. <p>
        <p> Tienes acceso a toda la información sobre el tratamiento de datos personales en la página de nuestra <a href='PoliticadePrivacidad.php' target='_blank' > Política de Privacidad </a> y la información sobre cookies en la página: <a href='PoliticaDeCookies.php' target='_blank' > Política de Cookies </a> <p>
            <h2> Compromisos y obligaciones de los usuarios. <h2>
        <p> El usuario se compromete a utilizar el sitio web, sus servicios y contenidos de buena fe y sin contravenir la legislación vigente. Debes tener tu navegador actualizado y javascript activado para el correcto funcionamiento de la web. <p>
        <p> Queda prohibido el uso de la web, con fines ilícitos o lesivos, o que, de cualquier forma, puedan causar perjuicio o impedir el normal funcionamiento del sitio web. Respecto de los contenidos de esta web, se prohíbe su reproducción, distribución o modificación, total o parcial, a menos que se cuente con autorización expresa de <b>$nombrep</b>, así como cualquier vulneración de los derechos del prestador del servicio como legítimo titular. <p>
        <p> En la utilización de la web, el usuario se compromete a no llevar a cabo ninguna conducta que pudiera dañar la imagen, los intereses y los derechos nuestros o de terceros o que pudiera dañar, inutilizar o que impidiera, la normal utilización de la web. </p>
        <p> Desde <b>$nombrep</b> se toman medidas activas y pasivas referentes a la seguridad de nuestra web, pero no se puede garantizar la inexistencia de malware u otros elementos que puedan producir alteraciones en los sistemas informáticos del usuario. Si detectas cualquier comportamiento irregular en el buen funcionamiento de la web, puedes contactar con nosotros a través del formulario de contacto. </p>
        <p> Los contenidos y servicios ofrecidos en la web son gratuitos </p>
        <h2> Derechos propiedad intelectual <b>$nombrep</b>  </h2>
        <p> <b>$nombrep</b> es titular de todos los derechos de autor, propiedad intelectual, industrial, “know how” y cuantos otros derechos guardan relación con los contenidos del sitio web y de los servicios ofertados en el mismo, así como de los programas necesarios para su implementación y la información relacionada. No se permite la reproducción, transformación, publicación y/o uso no estrictamente privado de los contenidos, totales o parciales, en medios digitales, impresos u otros, del sitio web sin el consentimiento previo y por escrito. </p>
        <h2> Propiedad intelectual del software </h2>
        <p> El usuario debe respetar los programas de terceros puestos a su disposición por <b>$nombrep</b>, aun siendo gratuitos y/o de disposición pública. <p>
        <p> <b>$nombrep</b> dispone de los derechos de explotación y propiedad intelectual necesarios del software. </p>
        <p> El usuario no adquiere derecho alguno o licencia por el servicio contratado, sobre el software necesario para la prestación del servicio, ni tampoco sobre la información técnica de seguimiento del servicio, excepción hecha de los derechos y licencias necesarios para el cumplimiento de los servicios contratados y únicamente durante la duración de los mismos. Para toda actuación que exceda del cumplimiento del contrato, el usuario necesitará autorización por escrito por parte de <b>$nombrep</b>, quedando prohibido al usuario acceder, modificar, visualizar la configuración, estructura y ficheros de los servidores propiedad de <b>$nombrep</b>, asumiendo la responsabilidad civil y penal derivada de cualquier incidencia que se pudiera producir en los servidores y sistemas de seguridad como consecuencia directa de una actuación negligente o maliciosa por su parte. </p>
        <h2> Propiedad intelectual de los contenidos alojados </h2>
        <p> Se prohíbe el uso contrario a la legislación sobre propiedad intelectual de los servicios prestados por <b>$nombrep</b> y en particular de: </p>
        <li type='square'> La utilización que resulte contraria a las leyes o que infrinja los derechos de terceros.</li>
        <li type='square'> La publicación o la transmisión de cualquier contenido que, a juicio de <b>$nombrep</b>, resulte violento, obsceno, abusivo, ilegal, racial, xenófobo o difamatorio. </li>
        <li type='square'> Los cracks, números de serie de programas o cualquier otro contenido que vulnere derechos de la propiedad intelectual de terceros. </li>
        <li type='square'> La recogida y/o utilización de datos personales de otros usuarios sin su consentimiento expreso o contraviniendo lo dispuesto en la LOPD o el RGPD. </li>
        <li type='square'> La utilización del servidor de correo del dominio y de las direcciones de correo electrónico para el envío de correo masivo no deseado. </li> <br>
        <p> El usuario tiene toda la responsabilidad sobre sus propios contenidos, la información transmitida y almacenada, los enlaces de hipertexto, las reivindicaciones de terceros y las acciones legales en referencia a propiedad intelectual, derechos de terceros y protección de menores. El usuario es responsable respecto a las leyes y reglamentos en vigor y las reglas que tienen que ver con el funcionamiento del servicio online, comercio electrónico, derechos de autor, mantenimiento del orden público, así como principios universales de uso de Internet. El usuario indemnizará a <b>$nombrep</b> por los gastos que generara la imputación de <b>$nombrep</b> en alguna causa cuya responsabilidad fuera atribuible al usuario, incluidos honorarios y gastos de defensa jurídica, incluso en el caso de una decisión judicial no definitiva. </p>
        <p> En las páginas de <b> $nombrep </b> encontrarás enlaces a sitios web de terceros con el único objeto de completar información, compartir contenido relevante, o en el caso de enlaces de afiliados, proponer productos o servicios que puedan ser de interés. A pesar de que se toman las medidas oportunas para asegurarse de que los contenidos enlazados ofrecen garantías, <b>$nombrep</b> no se responsabiliza de los resultados que puedan derivarse por el acceso a dichos enlaces ni del contenido de dichas páginas. </p>
        <p> En <b>$nombrep</b> se publican artículos, cursos y contenidos diversos, cuya autoría proviene de personas ajenas a nuestra web. Pedimos a todos estos colaboradores que respeten las leyes del copyright y los derechos de autor en todo aquello que se publica desde nuestras páginas. Si esto no se cumple, no nos hacemos responsables de ello, por estar fuera de nuestro conocimiento. </p>
        <p> Si en cualquier caso se observa alguna circunstancia que atente contra las leyes del copyright o los derechos de autor, ésta deberá ser comunicada lo antes posible a <b>$nombrep</b> a través del formulario de contacto, para poder subsanar el error o retirar el material si es necesario. </p>
        <p> No podemos garantizar la completa veracidad, fiabilidad y/o exactitud de todos los contenidos de la web, especialmente los provenientes de autores ajenos a <b>$nombrep</b> y los de las secciones con participación de los usuarios como los foros. </p>
        <p> Nos reservamos el derecho de modificar en cualquier momento las condiciones del servicio y las de su utilización, así como el derecho de dejar de prestar cualquiera de nuestros servicios. </p>
        <h2> Exención de responsabilidades </h2>
        <p> <b>$nombrep</b> no otorga ninguna garantía ni se hace responsable en ningún caso de los daños y perjuicios que pudieran derivar de: </p>
        <li type='square'> La falta de disponibilidad de la web, de sus servicios o contenidos. </li>
        <li type='square'> La existencia de contenido malicioso en la web. </li>
        <li type='square'> El uso ilícito de nuestros servicios o contenido, o contrario a este aviso legal. </li>
        <li type='square'> Los problemas de cualquier tipo en los servicios prestados por terceros. </li>
        <li type='square'> El borrado accidental o no del contenido de la web. </li> <br>
        <p> Nos esforzamos por mantener la página segura y libre de software malicioso. Si detectas cualquier comportamiento o actividad extraña en nuestra web, puedes comunicárnoslo a la dirección nuestro@ejemplo.com </p>
        <p> También queda a su disposición mayor información: <a href='https://bildenlex.com/propiedad-intelectual/cuales-textos-legales-debe-tener-una-pagina-web-2/' target='_blank'>Legales</a> </p> <br> <br>"

		?>
	   


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
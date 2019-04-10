<?php
	$result="";
	if(isset($_POST['submit'])) {
		require 'php/PHPMailerAutoload.php';
		$mail = new PHPMailer;
		$mail->Host='smtp.ionos.mx';
		$mail->Port=587;
		$mail->SMTPAuth=true;
		$mail->SMTPSecure='tls';
		$mail->username='contacto@advr.mx';
		$mail->password='contactoadvr01';

		$mail->setfrom($_POST['email'],$_POST['name']);
		$mail->addAddress('contacto@advr.mx');

		$mail->isHTML(true);
		$mail->Subject='Correo Desde advr.mx';
		$mail->Body='<h1 align=center>Name:'.$_POST['name'].'<br> Email: '.$_POST['email'].'<br> Message:'.$_POST['Message'].'</h1>';

		if (!$mail->send()) {
			$result="Error";
		}
		else{
			$result="Enviado";
		}


	}


?>



<!DOCTYPE HTML>

<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="shortcut icon" href="images/favicon.ico"/>
	<title>
	ADVR Consultores</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- <link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet"> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<!--SLIDER MAMALON-->
	<link rel="stylesheet" href="css/slicebox.css">


 
		<script type="text/javascript" src="js/modernizr.custom.46884.js"></script>

	</head>
	<body>
		
	<div class="gtco-loader"></div>

	<div id="page">
	<nav class="gtco-nav" role="navigation">
		
		<div class="gtco-container">
							

			<div class="row">
			<img id="mainAdvr"class="slide-in-bck-center" src="images/advr_efectos.png" align="right">

				<div class="col-md-12 text-right gtco-contact">

					<ul class="">
						<li><a href="#"><i class="ti-mobile"></i> +55 7030 8209 </a></li>
						<li><a href="#escribenos"><i class="icon-mail2"></i></a></li>
						
					</ul>
				</div>
			</div>
			<div class="row">
				
				<div class="col-sm-4 col-xs-12">
					
				</div>
				<!-- <img id="mainAdvr"class="slide-in-bck-center" src="images/advr_efectos.png"> -->
				<div class="col-xs-8 text-right menu-1">

					<ul>
						<li class="active"><a href="index.php">Inicio</a></li>
						<li><a href="#Nosotros">Nosotros</a></li>
						<li class="has-dropdown">
							<a href="#catalogo">Servicios</a>
							
						</li>
						<li class="has-dropdown">
							<a href="#operacion">Proyectos</a>
							
						</li>
						
						<li><a href="#escribenos">Contacto</a></li>
					</ul>
				</div>
			</div>
			
		</div>
	</nav>

	<header id="gtco-header" class="gtco-cover" role="banner" style="background-image:url(images/img_3.jpg);">

		<div class="overlay"></div>
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					<div class="display-t">

						<div class="display-tc">
							<!--Slider MAMALON-->
								<!--Slider MAMALON-->
								<!--Slider MAMALON-->
								<!--Slider MAMALON-->
				<div class="wrapper">

				<ul id="sb-slider" class="sb-slider">
					<li>
						<a  target="_blank"><img src="images/cac22.jpeg" alt="image1"/></a>
						<div class="sb-description">
							<h3>Sucursales</h3>
						</div>
					</li>
					<li>
						<a  target="_blank"><img src="images/cac3.jpeg" alt="image2"/></a>
						<div class="sb-description">
							<h3>Anuncios</h3>
						</div>
					</li>
					<li>
						<a  target="_blank"><img src="images/pc4.png" alt="image1"/></a>
						<div class="sb-description">
							<h3>Proteccion Civil</h3>
						</div>
					</li>
					<li>
						<a  target="_blank"><img src="images/constru.jpg" alt="image1"/></a>
						<div class="sb-description">
							<h3>Construcción</h3>
						</div>
					</li>
					<li>
						<a  target="_blank"><img src="images/op1.jpg" alt="image1"/></a>
						<div class="sb-description">
							<h3>Dictamenes Estructurales</h3>
						</div>
					</li>
					<li>
						<a  target="_blank"><img src="images/suelo.png" alt="image1"/></a>
						<div class="sb-description">
							<h3>Uso de Suelo</h3>
						</div>
					</li>
					<li>
						<a  target="_blank"><img src="images/dro2.jpg" alt="image1"/></a>
						<div class="sb-description">
							<h3>Firma de D.R.O.</h3>
						</div>
					</li>
				</ul>

				<div id="shadow" class="shadow"></div>

				<div id="nav-arrows" class="nav-arrows">
					<a href="#">Next</a>
					<a href="#">Previous</a>
				</div>

			</div><!-- /wrapper -->
			<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.slicebox.js"></script>
		<script type="text/javascript">
			$(function() {
				
				var Page = (function() {

					var $navArrows = $( '#nav-arrows' ).hide(),
						$shadow = $( '#shadow' ).hide(),
						slicebox = $( '#sb-slider' ).slicebox( {
							onReady : function() {

								$navArrows.show();
								$shadow.show();

							},
							orientation : 'r',
							cuboidsRandom : true,
							disperseFactor : 30
						} ),
						
						init = function() {

							initEvents();
							
						},
						initEvents = function() {

							// add navigation events
							$navArrows.children( ':first' ).on( 'click', function() {

								slicebox.next();
								return false;

							} );

							$navArrows.children( ':last' ).on( 'click', function() {
								
								slicebox.previous();
								return false;

							} );

						};

						return { init : init };

				})();

				Page.init();

			});
		</script>
								<!--Slider MAMALON-->
								<!--Slider MAMALON-->
								<!--Slider MAMALON-->
								<!--Slider MAMALON-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="gtco-features-3">
		<div class="gtco-container">
			<div class="gtco-flex">
				<div class="feature feature-1 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-inner">
						<span class="icon">
							<i class="ti-hummer"></i>
						</span>
						<h3>Proteccion Civil</h3>
						<p>
							Elaboración de Programas Internos de Protección Civil
							<br>
							Capacitaciones
							<br>
							Simulacros
							<br>
							Atención a prevenciones
							<br>
							Elaboración de carpetas básicas de STPS
						</p>
						<br>
						<p><a href="#catalogo" class="btn btn-white btn-outline">Ver Mas</a></p>
					</div>
				</div>
				<div class="feature feature-2 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-inner">
						<span class="icon">
							<i class="ti-clipboard"></i>
						</span>
						<h3>Permisos</h3>
						<p>
						Obtención de permisos
						<br>
						Lic. Funcionamiento
						<br>
						Lic. Anuncios
						<br>
						Uso del Suelo
						<br>
						Lic. Construcción
						<br>
						Vo.Bo. De Seguridad y Operación
						<br>
						Pago de CFE, Predial y Agua
						</p>
						<br>
						<p><a href="#catalogo" class="btn btn-white btn-outline">Ver Mas</a></p>
					</div>
				</div>
				<div class="feature feature-3 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-inner">
						<span class="icon">
							<i class="ti-signal"></i>
						</span>
						<h3>Dictámenes</h3>
						<p>
							Firma de Director Responsable de Obra y corresponsables		
							<br>	
							Elaboración de Dictámenes estructurales, Eléctricos Y Ecológicos.			
						</p>
						<br>
						<p><a href="#catalogo" class="btn btn-white btn-outline">Ver Mas</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div id="gtco-features">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box" id="Somos">
					<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;¿Quienes Somos?</h2>
						<p>
							Empresa especializada en todo lo relacionado a las gestiones corporativas ante las diversas autoridades ya sean municipales, gubernamentales y/o federales en la República Mexicana.
							<br>
							Integrada por personal multidisciplinario (ingenieros, arquitectos, peritos en materia de protección civil, directores responsables de obra, etc.), Esto con el objetivo de resolver situaciones en el ámbito de reglamentación, construcción  y soporte a empresas en donde tenemos el conocimiento de la reglamentación.
							<br>
							
						</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-map-alt"></i>
						</span>
						<h3>Cobertura en Toda la Republica</h3>
						
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-money"></i>
						</span>
						<h3>Optima Experiencia en Sector Bancario</h3>
						
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-timer"></i>
						</span>
						<h3>Respuesta Pronta (24-48 Hrs.)</h3>
						
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-briefcase"></i>
						</span>
						<h3>Experiencia con Corporativos</h3>
						
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--CATALOGO-->
	<!--CATALOGO-->
	<!--CATALOGO-->
	<!--CATALOGO-->
	<!--CATALOGO-->
	<!--CATALOGO-->
	<!--CATALOGO-->
	<!--CATALOGO-->
	<!--CATALOGO-->
	<!--CATALOGO-->
	<!--CATALOGO-->
	<div id="gtco-portfolio" class="gtco-section">
		<div class="gtco-container">
			<div class="row">
					<!--LOGROS-->
					<!--LOGROS-->
					<!--LOGROS-->
					<!--LOGROS-->
					<!--LOGROS-->
					<!--LOGROS-->
					<!--LOGROS-->
				<div id="gtco-counter" class="gtco-section">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box" id="operacion">
					<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nuestra Operacion</h2>
					<p>ADVR Consultores Cuenta con oficinas corporativas en Ciudad de México, Monterrey, Merida y Playa del Carmen.	</p>
				</div>
			</div>

			<div class="row">
				
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
					<div class="feature-center">
						<span class="icon">
							<i class="ti-cup"></i>
						</span>
						<span class="counter js-counter" data-from="0" data-to="625" data-speed="5000" data-refresh-interval="50">1</span>
						<span class="counter-label">Licencias Obtenidas Y/O Renovadas</span>

					</div>
				</div>
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
					<div class="feature-center">
						<span class="icon">
							<i class="ti-cup"></i>
						</span>
						<span class="counter js-counter" data-from="0" data-to="238" data-speed="5000" data-refresh-interval="50">1</span>
						<span class="counter-label">Programas Internos de Proteccion Civil</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
					<div class="feature-center">
						<span class="icon">
							<i class="ti-cup"></i>
						</span>
						<span class="counter js-counter" data-from="0" data-to="125" data-speed="5000" data-refresh-interval="50">1</span>
						<span class="counter-label">Dictamenes</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
					<div class="feature-center">
						<span class="icon">
							<i class="ti-cup"></i>
						</span>
						<span class="counter js-counter" data-from="0" data-to="322" data-speed="5000" data-refresh-interval="50">1</span>
						<span class="counter-label">Vistos Buenos</span>
					</div>
				</div>
				
				</div>
					
			</div>
		</div>

			<!--LOGROS-->
			<!--LOGROS-->
			<!--LOGROS-->
			<!--LOGROS-->
			<!--LOGROS-->
			<!--LOGROS-->
			<!--LOGROS-->


				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box" id="catalogo">
					<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Catalogo de Servicios</h2>
					<p>Nuestro Objetivo es resolver situaciones en el ámbito de reglamentación, construcción y soporte a empresas en donde tenemos el conocimiento de la reglamentación.  </p>
				</div>
			</div>

			<div class="row row-pb-md">
				<div class="col-md-12">
					<ul id="gtco-portfolio-list">
						<li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/antena.jpg);"> 
						<a  class="color-1">
								<div class="case-studies-summary"> 
									<span>Dictamenes</span>
									<h2>Localizacion de Sitios</h2>
								</div>
							</a>
						</li>
						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/adqui.jpg); ">
							<a  class="color-2">
								<div class="case-studies-summary">
									<span>Dictamenes</span>
									<h2>Adquisicion de Sitios</h2>
								</div>
							</a>
						</li>


						<li class="one-half animate-box" data-animate-effect="fadeIn" style="background-image: url(images/construccion.jpg); ">
							<a  class="color-3">
								<div class="case-studies-summary">
									<span>Dictamenes</span>
									<h2>Construccion</h2>
								</div>
							</a>
						</li>
						<li class="one-half animate-box" data-animate-effect="fadeIn" style="background-image: url(images/constru.jpg); ">
							<a  class="color-4">
								<div class="case-studies-summary">
									<span>Permisos</span>
									<h2>Licencias de Construccion</h2>
								</div>
							</a>
						</li>

						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/funcionamiento.jpg); "> 
							<a  class="color-5">
								<div class="case-studies-summary">
									<span>Permisos</span>
									<h2>Licencias de Funcionamiento</h2>
								</div>
							</a>
						</li>
						<li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/cac3.jpeg); ">
							<a  class="color-6">
								<div class="case-studies-summary">
									<span>Permisos</span>
									<h2>Licencias de Anuncios</h2>
								</div>
							</a>
						</li>
					</ul>		
				</div>
			<div class="row row-pb-md">
				<div class="col-md-12">
					<ul id="gtco-portfolio-list">
						<li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/capacitaciones.jpg); "> 
							<a  class="color-1">
								<div class="case-studies-summary">
									<span>Proteccion Civil</span>
									<h2>Capacitaciones</h2>
								</div>
							</a>
						</li>
						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/simulacro.jpg); ">
							<a  class="color-2">
								<div class="case-studies-summary">
									<span>Proteccion Civil</span>
									<h2>Simulacros</h2>
								</div>
							</a>
						</li>


						<li class="one-half animate-box" data-animate-effect="fadeIn" style="background-image: url(images/preven.jpg); ">
							<a  class="color-3">
								<div class="case-studies-summary">
									<span>Proteccion Civil</span>
									<h2>Atencion A Prevenciones</h2>
								</div>
							</a>
						</li>
						<li class="one-half animate-box" data-animate-effect="fadeIn" style="background-image: url(images/carp.jpg); ">
							<a  class="color-4">
								<div class="case-studies-summary">
									<span>Proteccion Civil</span>
									<h2>Programas Internos</h2>
								</div>
							</a>
						</li>

						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/STPS.jpg); "> 
							<a  class="color-5">
								<div class="case-studies-summary">
									<span>Proteccion Civil</span>
									<h2>Carpetas Basicas de STPS</h2>
								</div>
							</a>
						</li>
						<li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/dro2.jpg); ">
							<a  class="color-6">
								<div class="case-studies-summary">
									<span>Dictamenes</span>
									<h2>Firma de D.R.O.</h2>
								</div>
							</a>
						</li>
					</ul>		
			</div>

		</div>
	</div>

	

	<div id="gtco-subscribe">
		<div class="gtco-container">
									<div class="row animate-box">
										<div class="col-md-8 col-md-offset-2 text-center gtco-heading" id="escribenos">
											<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Escribenos</h2>
											<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Deja Tus Datos y Nos Pondremos en  Contacto</p>
										</div>
									</div>
					<div class="row animate-box">
						<div class="col-md-12">
									<form class="form-inline" method="post">
										<div class="col-md-4 col-sm-4">
											<div class="form-group">
												
												<input type="email" class="form-control" name="email" id="email" placeholder="Correo Electronico">
											</div>
										</div>
										<div class="col-md-4 col-sm-4">
											<div class="form-group">
												
												<input type="text" class="form-control" name="name" id="name" placeholder="Nombre o Razon Social">
											</div>

										</div>

										<div class="col-md-4 col-sm-4">
											<div class="form-group">
												<label for="name" class="sr-only">Phone</label>
												<input type="text" class="form-control" id="name" placeholder="Telefono">
											</div>
										</div>
										<div class="col-md-11 col-sm-5">
											<div class="form-group">

												
												
												<textarea type="text" class="form-control" id="name" name="Message" placeholder="Mensaje">
											</div>
										</div>
										<div class="col-md-6 col-sm-6">
											
											<div class="form-group">
												

												<input type="submit" name="submit" id="submit" class="btn btn-default" value="Enviar">
											</div>
										</div>
									</form>
						</div>
					</div>
			</div>
	</div>

				<footer id="gtco-footer" role="contentinfo">
					<div class="gtco-container">
						<div class="row row-p	b-md">

							<div class="col-md-4">
								<div class="gtco-widget">
									<h3>Nosotros</h3>
									<p>
									Empresa especializada en todo lo relacionado a las gestiones corporativas ante las diversas autoridades ya sean municipales, gubernamentales y/o federales en la República Mexicana.</p>
								</div>
							</div>

							<div class="col-md-4 col-md-push-1">
								<div class="gtco-widget">
									<h3>Links</h3>
									<ul class="gtco-footer-links">
										<li><a href="#">Inicio</a></li>
										<li><a href="#Somos">¿Quienes Somos?</a></li>
										<li><a href="#catalogo">Catalogo</a></li>
										<li><a href="#operacion">Nuestra Operacion</a></li>
										<li><a href="#escribenos">Escribenos</a></li>
									</ul>
								</div>
							</div>

							<div class="col-md-4">
								<div class="gtco-widget">
									<h3>Contactanos</h3>
									<ul class="gtco-quick-contact">
										<li><a href="#"><i class="icon-phone"></i> +55 7030 8209</a></li>
										<li><a href="#"><i class="icon-mail2"></i> contacto@advr.mx</a></li>
										
									</ul>
								</div>
							</div>

						</div>

						
								
							</div>
						</div>

					</div>
				</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>


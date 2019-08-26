<!DOCTYPE html>
<?php  $version = date('YmdHis'); ?>
<html ng-app="mavimovilApp">
<head>
	<meta charset="utf-8"/>
	<title>Mavimovil</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=no">
	<meta name="description" content="Autofin"> 


	<link rel="stylesheet" href="assets/web/css/bootstrap.min.css?<?php echo $version ?>">
	<link rel="stylesheet" href="assets/web/css/animate.css?<?php echo $version ?>">
	
	<link rel="stylesheet" type="text/css" href="assets/web/slick/slick/slick.css"/>
  	<link rel="stylesheet" type="text/css" href="assets/web/slick/slick/slick-theme.css"/
  	>
	<link rel="stylesheet" href="assets/web/css/main.css?<?php echo $version ?>">


	<script src="assets/web/js/vendor/jquery-1.11.2.min.js?<?php echo $version ?>"></script>
	<script src="assets/web/js/vendor/bootstrap.min.js?<?php echo $version ?>"></script>
	<script src="assets/web/js/vendor/jquery.waypoints.min.js"></script>
	<script src="assets/web/angularjs/angular.min.js"></script>
	<script type="text/javascript" src="assets/web/slick/slick/slick.min.js"></script>


	
	<script src="assets/web/js/webflow.min.js" type="text/javascript"></script>

	<script type="text/javascript" src="assets/web/slick/slick/slick.min.js"></script>


	<script src="https://www.google.com/recaptcha/api.js"></script> 

	<script type="text/javascript" src="assets/web/js/index.js"></script>

</head>
<body  ng-controller="Mavimovil" style="display: none;" data-spy="scroll" data-target="#main-header">
	<header id="main-header">
		<?php include 'menu.php'  ?>
	</header>

	<section class="section-1" id="mavimovil">
		<?php include 'mavimovil.php'  ?>	
	</section>

	<section class="section-2" id="somos">
		<?php include 'somos.php'  ?>	
	</section>

	<section class="section-3" id="desarrollo-de-apps">
		<?php include 'app.php'  ?>	
	</section>

	<section class="section-4" >
		<?php include 'solutions.php'  ?>	
	</section>

	<section class="section-6" id="plataformas">
		<?php include 'plataformas.php'  ?>
	</section>


	<section class="section-3" id="tecnologias">
		<?php include 'tecnologias.php'  ?>
	</section>

	<section class="section-3" id="clientes">
		<?php include 'clientes.php'  ?>
	</section>

	<section class="section-5" id="contacto">
		<?php include 'contacto.php'  ?>
	</section>

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-0 col-sm-6 col-sm-offset-3">
					<img alt="Mavimovil" src="assets/web/img/logotipo-mavimovil-blanco.svg"  height="100">
				</div>
				<div class="col-md-5 col-md-offset-0 col-sm-6 col-sm-offset-3">
					<p class="paragraph-6">
						<br>Teléfono: +562 2848 5162<br>
											Av. Del Valle 945, Oficina 2607,<br>Huechuraba, Santiago</p>
				</div>
				<div class="col-md-1">
					<div id="go_top" class="text-right">
						<br>
						<a href="#mavimovil">
					        <img alt="Volver al inicio" src="assets/web/img/top-boton.svg"  height="50">
					     </a>
					</div>
					
				</div>
			</div>
		</div>
	</footer>
	
	

</body></html>
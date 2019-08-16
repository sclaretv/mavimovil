<!DOCTYPE html>
<?php  $version = date('YmdHis'); ?>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Mavimovil</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=no">
	<meta name="description" content="Autofin"> 


	<link rel="stylesheet" href="assets/web/css/bootstrap.min.css?<?php echo $version ?>">
	<link rel="stylesheet" href="assets/web/css/animate.css?<?php echo $version ?>">
	
	<link rel="stylesheet" href="assets/web/css/main.css?<?php echo $version ?>">


	<script src="assets/web/js/vendor/jquery-1.11.2.min.js?<?php echo $version ?>"></script>
	<script src="assets/web/js/vendor/bootstrap.min.js?<?php echo $version ?>"></script>

</head>
<body>
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

	<section class="section-3" id="plataformas">
		<?php include 'plataformas.php'  ?>	
	</section>

	<section class="section-3" id="tecnologias">
		<?php //include 'tecnologias.php'  ?>
		<div class="container"></div>	
	</section>

	<section class="section-3" >
		<?php //include 'tecnologias.php'  ?>
		<div class="container"></div>	
	</section>


	<section class="section-3" >
		<?php //include 'tecnologias.php'  ?>
		<div class="container">
			<div class="row">
				<h1 class="heading-4">Combinando tecnologías,<br> logramos mejores resultados</h1>
				<p class="paragraph-4">Somos Mavimovil una empresa que caracteriza en desarrollar soluciones<br> tecnológicas a medida, integrando los entornos tecnológicos.</p>
			</div>
		</div>	
	</section>

	<section class="section-3" >
		<?php //include 'tecnologias.php'  ?>
		<div class="container">
			<div class="row">
				<h1 class="heading-4">Confían en nosotros</h1>
				<p class="paragraph-4">Somos Mavimovil una empresa que caracteriza en desarrollar soluciones<br> tecnológicas a medida, integrando los entornos tecnológicos.</p>
			</div>
		</div>	
	</section>

	<section class="section-4"></section>

	<section class="section-5" >

		<div class="container container-1">
			<div class="row">
				<div class="col-lg-6">
					<div>
						<h1 class="heading-5">¿Alguna necesidad que cubrir?</h1>
					</div>
					<div>
						<p class="paragraph-5">Somos Mavimovil una empresa que caracteriza en desarrollar soluciones tecnológicas a medida, integrando los entornos tecnológicos.</p>
					</div>
				</div>

				<div class="col-lg-6">
					
					
				</div>
			</div>
		</div>
		

	</section>

	<section class="section-6"></section>

	<section class="section-5">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<img alt="Mavimovil" src="assets/web/img/logotipo-mavimovil-blanco.svg"  height="80">
				</div>
				<div class="col-md-5">
					<p class="paragraph-6">Teléfono: +562 2848 5162<br>
											Av. Del Valle 945, Oficina 2607,<br>Huechuraba, Santiago</p>
				</div>
				<div class="col-md-1">
					<div class="text-right">
						<a href="#main-header">
					        <img alt="Volver al inicio" src="assets/web/img/top-boton.svg"  height="50">
					     </a>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	

	<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script><script src="https://uploads-ssl.webflow.com/5cc46826d9da3376e27ebde0/js/webflow.5ab29a3fc.js" type="text/javascript"></script><!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
	<script type="text/javascript">

		$("#index-apps").click(function() {
	        $(".slider1").removeClass("hide");
	        $(".slider1").addClass("active");
	        $(".slider2").addClass("hide");
	        $(".slider2").removeClass("active");
	        $(".slider3").addClass("hide");
	        $(".slider3").removeClass("active");
	        
	    });

	    $("#index-plat").click(function() {
	        $(".slider1").addClass("hide");
	        $(".slider1").removeClass("active");
	        $(".slider2").removeClass("hide");
	        $(".slider2").addClass("active");
	        $(".slider3").addClass("hide");
	        $(".slider3").removeClass("active");
	        
	    });

	    $("#index-inte").click(function() {
	        $(".slider1").addClass("hide");
	        $(".slider1").removeClass("active");
	        $(".slider2").addClass("hide");
	        $(".slider2").removeClass("active");
	        $(".slider3").removeClass("hide");
	        $(".slider3").addClass("active");
	        
	    });


  var $mh = $('#main-header'); 
    var hclass = 'mini';
    $mh.removeClass(hclass); 
    $(document).on( 'scroll', function(){
        if ($(window).scrollTop() > 10) {
            $mh.addClass(hclass);
        } else {
            $mh.removeClass(hclass);
        }
    });  
  </script>
</body></html>
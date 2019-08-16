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
	
	<link rel="stylesheet" type="text/css" href="assets/web/slick/slick/slick.css"/>
  	<link rel="stylesheet" type="text/css" href="assets/web/slick/slick/slick-theme.css"/
  	>
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

			<div class="carousel-confian">
			    <div><img class="imagen-confian" alt="Mavimovil" src="assets/web/img/clientes_Mesa de trabajo 1.png"  height="50"></div>
			    <div><img class="imagen-confian" alt="Mavimovil" src="assets/web/img/clientes-02.png"  height="50"></div>
			    <div><img class="imagen-confian" alt="Mavimovil" src="assets/web/img/clientes-03.png"  height="50"></div>
			    <div><img class="imagen-confian" alt="Mavimovil" src="assets/web/img/clientes-04.png"  height="50"></div>
			    <div><img class="imagen-confian" alt="Mavimovil" src="assets/web/img/clientes-05.png"  height="50"></div>
			    <div><img class="imagen-confian" alt="Mavimovil" src="assets/web/img/clientes-06.png"  height="50"></div>
			    <div><img class="imagen-confian" alt="Mavimovil" src="assets/web/img/clientes-07.png"  height="50"></div>
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

			<div class="carousel-confian">
			    <div><img class="imagen-confian" alt="Mavimovil" src="assets/web/img/clientes_Mesa de trabajo 1.png"  height="50"></div>
			    <div><img class="imagen-confian" alt="Mavimovil" src="assets/web/img/clientes-02.png"  height="50"></div>
			    <div><img class="imagen-confian" alt="Mavimovil" src="assets/web/img/clientes-03.png"  height="50"></div>
			    <div><img class="imagen-confian" alt="Mavimovil" src="assets/web/img/clientes-04.png"  height="50"></div>
			    <div><img class="imagen-confian" alt="Mavimovil" src="assets/web/img/clientes-05.png"  height="50"></div>
			    <div><img class="imagen-confian" alt="Mavimovil" src="assets/web/img/clientes-06.png"  height="50"></div>
			    <div><img class="imagen-confian" alt="Mavimovil" src="assets/web/img/clientes-07.png"  height="50"></div>
			</div>
			
		</div>	
	</section>

	
	<section class="section-5" >

		<div class="container ">
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
					
					<form method="post" action="/form/insert/home" id="form_contact">

						<div class="form-group">
						    <label for="nombre"> Nombre *</label>
						    <input type="text" class="form-control" id="nombre" name="contacto_nombre"  required="">
						</div>

						<div class="form-group">
						    <label for="apellido"> Apellido *</label>
						    <input type="text" class="form-control" id="apellido" name="contacto_apellido"  required="">
						</div>

						<div class="form-group">
						    <label for="empresa"> Empresa </label>
						    <input type="text" class="form-control" id="empresa" name="contacto_empresa" >
						</div>

						<div class="form-group">
						    <label for="email">Email  *</label>
						    <input type="text" class="form-control" id="email" name="contacto_email" placeholder="su_email@email.com" required="">
						</div> 

						<div class="form-group">
						    <label for="fono">Fono  *</label>
						    <input type="text" class="form-control" id="fono" name="contacto_fono" placeholder=""  >
						</div> 

						<div class="form-group">
						    <label for="asunto"> Asunto  *</label>
						    <input type="text" class="form-control" id="asunto" name="contacto_asunto"  required="">
						</div>

						<div class="form-group">
						    <label for="mensaje"> Mensaje  *</label>
						    <textarea class="form-control" id="mensaje" name="contacto_mensaje"  required=""></textarea>
						</div> 

						<!-- FORMULARIO CON RECAPTCHA -->
						<div class="g-recaptcha" data-sitekey="6LeMkaAUAAAAAJI_ctx_3G_j3kWXZeim4C3uiqix"></div> 

						<div class="text-center">
							<div class="alert alert-warning" style="display:none">
								 
							</div>
							<div class="alert alert-success" style="display:none">
								 Has enviado tu mensaje con éxito. Gracias.
							</div>
							<div class="alert alert-info loading" style="display:none">
								Espere un momento ...
							</div>
						</div>
						 
						<div class="text-center">
							<button type="submit" class="btn btn-default"> Enviar </button>
						</div>

					</form>
					
				</div>
			</div>
		</div>
		

	</section>

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<img alt="Mavimovil" src="assets/web/img/logotipo-mavimovil-blanco.svg"  height="100">
				</div>
				<div class="col-md-5">
					<p class="paragraph-6">
						<br>Teléfono: +562 2848 5162<br>
											Av. Del Valle 945, Oficina 2607,<br>Huechuraba, Santiago</p>
				</div>
				<div class="col-md-1">
					<div class="text-right">
						<br>
						<a href="#mavimovil">
					        <img alt="Volver al inicio" src="assets/web/img/top-boton.svg"  height="50">
					     </a>
					</div>
					
				</div>
			</div>
		</div>
	</footer>
	

	<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script><script src="https://uploads-ssl.webflow.com/5cc46826d9da3376e27ebde0/js/webflow.5ab29a3fc.js" type="text/javascript"></script><!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
	<script type="text/javascript" src="assets/web/slick/slick/slick.min.js"></script>

	<script src="https://www.google.com/recaptcha/api.js"></script> 

	<script type="text/javascript">

		$(document).ready(function(){

			// menu
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


			// sliders index
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


		    // logo sliders
			$('.carousel-confian').slick({
		        slidesToShow: 4,
				slidesToScroll: 1,
				autoplay: true,
				autoplaySpeed: 2000,
		    });


		    // form contactos
		    var ajax_form = function (id_form,id_msg_fail,id_msg_success,id_loading){ 
	        $(id_form).on('submit', function(e) {
	            e.preventDefault();
	            e.stopPropagation();

	            var form_ = $(this), fail_ = $(id_msg_fail), s_ = $(id_msg_success), loading_ = $(id_loading);

	            s_.slideUp('fast');
	            fail_.slideUp('fast');
	            s_.click(function(){ $(this).slideUp('fast'); });
	            fail_.click(function(){ $(this).slideUp('fast'); });

	            loading_.show();

	            var data_sent = form_.serialize();
	            $.ajax({
	                dataType:'json',
	                type: 'POST',
	                url: form_.attr('action'),
	                data: data_sent,
	                success: function(response) { 
	                	loading_.fadeOut('fast');

	                    if(response.status == true){
	                        s_.show(); 
	                        form_.trigger('reset');
	                    }else{ 
	                        if(response.error){
	                            fail_.html(response.error).slideDown();
	                        }else{
	                            fail_.html('<p>No hemos podido procesar los datos, Intente en un momento.</p>').slideDown();
	                        }
	                    } 
	                }
	            });
	        });
	    }  
	    ajax_form('#form_contact','#form_contact .alert-warning','#form_contact .alert-success','#form_contact .loading'); 

    });
  </script>
</body></html>
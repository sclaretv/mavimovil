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

	<section class="section-3" >
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



		$('.efx').each(function(index, el) {
	      var $elem = $(this);    
	      var up = ($elem.data('up'))?$elem.data('up'):'fadeIn'; 
	      var down = ($elem.data('down'))?$elem.data('down'):'fadeOut'; 
	      $elem .addClass('animated '+up); 


	      	var waypoint = new Waypoint({
			  element: this,
			  handler: function(dir) {
			    if(dir=='up'){
			              $elem.addClass(down).removeClass(up)
			          }else{ 
			              $elem.addClass(up).removeClass(down);   
			          }  
			  },  offset: 'bottom-in-view' }
			  );

			$elem.removeClass(up).addClass(down); 
	   	});

    });


	angular.module('mavimovilApp', [])
	  .controller('Mavimovil', function($scope, $timeout) {

	  	$scope.solution_selected=0;


	  	$scope.solutions=[
	  	{
	  		'fondo_url':null, 
		  	'titulo':'ESTILO DE VIDA', 
		  	'subtitulo':'MI AUTOFIN', 
		  	'descripcion':'Somos Mavimovil, una empresa que caracteriza en desarrollar soluciones tecnológicas a medida, integrando los entornos tecnológicos que nuestros clientes utiliza. Somos Mavimovil, una empresa que caracteriza en desarrollar soluciones tecnológicas a medida, integrando los entornos tecnológicos que nuestros clientes utiliza. Somos Mavimovil, una empresa que caracteriza en desarrollar soluciones tecnológicas a medida, integrando los entornos tecnológicos que nuestros clientes utiliza.', 
		  	'btn_vermas':null, 
		  	'btn_playstore':null, 
		  	'btn_appstore':null
		  },

		  {
	  		'fondo_url':null, 
		  	'titulo':'ESTILO DE VIDA', 
		  	'subtitulo':'MI AUTOFIN', 
		  	'descripcion':'Somos Mavimovil, una empresa que caracteriza en desarrollar soluciones tecnológicas a medida, integrando los entornos tecnológicos que nuestros clientes utiliza. Somos Mavimovil, una empresa que caracteriza en desarrollar soluciones tecnológicas a medida, integrando los entornos tecnológicos que nuestros clientes utiliza. Somos Mavimovil, una empresa que caracteriza en desarrollar soluciones tecnológicas a medida, integrando los entornos tecnológicos que nuestros clientes utiliza.', 
		  	'btn_vermas':null, 
		  	'btn_playstore':null, 
		  	'btn_appstore':null
		  },

		  {
	  		'fondo_url':null, 
		  	'titulo':'ESTILO DE VIDA', 
		  	'subtitulo':'MI AUTOFIN', 
		  	'descripcion':'Somos Mavimovil, una empresa que caracteriza en desarrollar soluciones tecnológicas a medida, integrando los entornos tecnológicos que nuestros clientes utiliza. Somos Mavimovil, una empresa que caracteriza en desarrollar soluciones tecnológicas a medida, integrando los entornos tecnológicos que nuestros clientes utiliza. Somos Mavimovil, una empresa que caracteriza en desarrollar soluciones tecnológicas a medida, integrando los entornos tecnológicos que nuestros clientes utiliza.', 
		  	'btn_vermas':null, 
		  	'btn_playstore':null, 
		  	'btn_appstore':null
		  },

		  {
	  		'fondo_url':null, 
		  	'titulo':'ESTILO DE VIDA', 
		  	'subtitulo':'MI AUTOFIN', 
		  	'descripcion':'Somos Mavimovil, una empresa que caracteriza en desarrollar soluciones tecnológicas a medida, integrando los entornos tecnológicos que nuestros clientes utiliza. Somos Mavimovil, una empresa que caracteriza en desarrollar soluciones tecnológicas a medida, integrando los entornos tecnológicos que nuestros clientes utiliza. Somos Mavimovil, una empresa que caracteriza en desarrollar soluciones tecnológicas a medida, integrando los entornos tecnológicos que nuestros clientes utiliza.', 
		  	'btn_vermas':null, 
		  	'btn_playstore':null, 
		  	'btn_appstore':null
		  },

		  {
	  		'fondo_url':null, 
		  	'titulo':'ESTILO DE VIDA', 
		  	'subtitulo':'MI AUTOFIN', 
		  	'descripcion':'Somos Mavimovil, una empresa que caracteriza en desarrollar soluciones tecnológicas a medida, integrando los entornos tecnológicos que nuestros clientes utiliza. Somos Mavimovil, una empresa que caracteriza en desarrollar soluciones tecnológicas a medida, integrando los entornos tecnológicos que nuestros clientes utiliza. Somos Mavimovil, una empresa que caracteriza en desarrollar soluciones tecnológicas a medida, integrando los entornos tecnológicos que nuestros clientes utiliza.', 
		  	'btn_vermas':null, 
		  	'btn_playstore':null, 
		  	'btn_appstore':null
		  },

		  {
	  		'fondo_url':null, 
		  	'titulo':'ESTILO DE VIDA', 
		  	'subtitulo':'MI AUTOFIN', 
		  	'descripcion':'Somos Mavimovil, una empresa que caracteriza en desarrollar soluciones tecnológicas a medida, integrando los entornos tecnológicos que nuestros clientes utiliza. Somos Mavimovil, una empresa que caracteriza en desarrollar soluciones tecnológicas a medida, integrando los entornos tecnológicos que nuestros clientes utiliza. Somos Mavimovil, una empresa que caracteriza en desarrollar soluciones tecnológicas a medida, integrando los entornos tecnológicos que nuestros clientes utiliza.', 
		  	'btn_vermas':null, 
		  	'btn_playstore':null, 
		  	'btn_appstore':null
		  },

		  {
	  		'fondo_url':null, 
		  	'titulo':'ESTILO DE VIDA', 
		  	'subtitulo':'MI AUTOFIN', 
		  	'descripcion':'Somos Mavimovil, una empresa que caracteriza en desarrollar soluciones tecnológicas a medida, integrando los entornos tecnológicos que nuestros clientes utiliza. Somos Mavimovil, una empresa que caracteriza en desarrollar soluciones tecnológicas a medida, integrando los entornos tecnológicos que nuestros clientes utiliza. Somos Mavimovil, una empresa que caracteriza en desarrollar soluciones tecnológicas a medida, integrando los entornos tecnológicos que nuestros clientes utiliza.', 
		  	'btn_vermas':null, 
		  	'btn_playstore':null, 
		  	'btn_appstore':null
		  },

		  {
	  		'fondo_url':null, 
		  	'imagen_url':'assets/web/img/app-museo.png', 
		  	'titulo':'ESTILO DE VIDA', 
		  	'subtitulo':'MI AUTOFIN', 
		  	'descripcion':'Somos Mavimovil, una empresa que caracteriza en desarrollar soluciones tecnológicas a medida, integrando los entornos tecnológicos que nuestros clientes utiliza. Somos Mavimovil, una empresa que caracteriza en desarrollar soluciones tecnológicas a medida, integrando los entornos tecnológicos que nuestros clientes utiliza. Somos Mavimovil, una empresa que caracteriza en desarrollar soluciones tecnológicas a medida, integrando los entornos tecnológicos que nuestros clientes utiliza.', 
		  	'btn_vermas':null, 
		  	'btn_playstore':null, 
		  	'btn_appstore':null
		  },

		  {
	  		'fondo_url':null, 
		  	'imagen_url':'assets/web/img/app-museo.png', 
		  	'titulo':'ESTILO DE VIDA', 
		  	'subtitulo':'MI AUTOFIN', 
		  	'descripcion':'Somos Mavimovil, una empresa que caracteriza en desarrollar soluciones tecnológicas a medida, integrando los entornos tecnológicos que nuestros clientes utiliza. Somos Mavimovil, una empresa que caracteriza en desarrollar soluciones tecnológicas a medida, integrando los entornos tecnológicos que nuestros clientes utiliza. Somos Mavimovil, una empresa que caracteriza en desarrollar soluciones tecnológicas a medida, integrando los entornos tecnológicos que nuestros clientes utiliza.', 
		  	'btn_vermas':null, 
		  	'btn_playstore':null, 
		  	'btn_appstore':null
		  },

		  {
	  		'fondo_url':null, 
		  	'imagen_url':'assets/web/img/app-museo.png', 
		  	'titulo':'ESTILO DE VIDA', 
		  	'subtitulo':'MI AUTOFIN', 
		  	'descripcion':'Somos Mavimovil, una empresa que caracteriza en desarrollar soluciones tecnológicas a medida, integrando los entornos tecnológicos que nuestros clientes utiliza. Somos Mavimovil, una empresa que caracteriza en desarrollar soluciones tecnológicas a medida, integrando los entornos tecnológicos que nuestros clientes utiliza. Somos Mavimovil, una empresa que caracteriza en desarrollar soluciones tecnológicas a medida, integrando los entornos tecnológicos que nuestros clientes utiliza.', 
		  	'btn_vermas':null, 
		  	'btn_playstore':null, 
		  	'btn_appstore':null
		  },];

 		

 		$scope.anterior_solution = function (index) {
 			if (index==0) {
 			$scope.solution_selected = $scope.solutions.length-1;
	 		} else {
	 			$scope.solution_selected = index-1;
	 		}
	 	}

	 	$scope.siguiente_solution = function (index) {
 			if (index==$scope.solutions.length-1) {
 			$scope.solution_selected = 0;
	 		} else {
	 			$scope.solution_selected = index+1;
	 		}
	 	}

	 	$scope.seleccionar_solution = function (index) {
 			$scope.solution_selected = index;
	 	}

	 	$scope.plataforma_selected=0;


	  	$scope.plataformas=[
	  	{
	  		'fondo_url':null, 
		  	'titulo':'FINANCIERO', 
		  	'subtitulo':'CRM BUHO', 
		  	'descripcion':'Somos Mavimovil, una empresa que caracteriza en desarrollar soluciones tecnológicas a medida, integrando los entornos tecnológicos que nuestros clientes utiliza. Somos Mavimovil, una empresa que caracteriza en desarrollar soluciones tecnológicas a medida, integrando los entornos tecnológicos que nuestros clientes utiliza. Somos Mavimovil, una empresa que caracteriza en desarrollar.', 
		  	'btn_vermas':null, 
		  	'btn_playstore':null, 
		  	'btn_appstore':null
		  },

		  {
	  		'fondo_url':null, 
		  	'titulo':'FINANCIERO', 
		  	'subtitulo':'CRM BUHO', 
		  	'descripcion':'Somos Mavimovil, una empresa que caracteriza en desarrollar soluciones tecnológicas a medida, integrando los entornos tecnológicos que nuestros clientes utiliza. Somos Mavimovil, una empresa que caracteriza en desarrollar soluciones tecnológicas a medida, integrando los entornos tecnológicos que nuestros clientes utiliza. Somos Mavimovil, una empresa que caracteriza en desarrollar.', 
		  	'btn_vermas':null, 
		  	'btn_playstore':null, 
		  	'btn_appstore':null
		  },

		  {
	  		'fondo_url':null, 
		  	'titulo':'FINANCIERO', 
		  	'subtitulo':'CRM BUHO', 
		  	'descripcion':'Somos Mavimovil, una empresa que caracteriza en desarrollar soluciones tecnológicas a medida, integrando los entornos tecnológicos que nuestros clientes utiliza. Somos Mavimovil, una empresa que caracteriza en desarrollar soluciones tecnológicas a medida, integrando los entornos tecnológicos que nuestros clientes utiliza. Somos Mavimovil, una empresa que caracteriza en desarrollar.', 
		  	'btn_vermas':null, 
		  	'btn_playstore':null, 
		  	'btn_appstore':null
		  },

		  {
	  		'fondo_url':null, 
		  	'titulo':'FINANCIERO', 
		  	'subtitulo':'CRM BUHO', 
		  	'descripcion':'Somos Mavimovil, una empresa que caracteriza en desarrollar soluciones tecnológicas a medida, integrando los entornos tecnológicos que nuestros clientes utiliza. Somos Mavimovil, una empresa que caracteriza en desarrollar soluciones tecnológicas a medida, integrando los entornos tecnológicos que nuestros clientes utiliza. Somos Mavimovil, una empresa que caracteriza en desarrollar.', 
		  	'btn_vermas':null, 
		  	'btn_playstore':null, 
		  	'btn_appstore':null
		  },

		  {
	  		'fondo_url':null, 
		  	'titulo':'FINANCIERO', 
		  	'subtitulo':'CRM BUHO', 
		  	'descripcion':'Somos Mavimovil, una empresa que caracteriza en desarrollar soluciones tecnológicas a medida, integrando los entornos tecnológicos que nuestros clientes utiliza. Somos Mavimovil, una empresa que caracteriza en desarrollar soluciones tecnológicas a medida, integrando los entornos tecnológicos que nuestros clientes utiliza. Somos Mavimovil, una empresa que caracteriza en desarrollar.', 
		  	'btn_vermas':null, 
		  	'btn_playstore':null, 
		  	'btn_appstore':null
		  },

		  {
	  		'fondo_url':null, 
		  	'titulo':'FINANCIERO', 
		  	'subtitulo':'CRM BUHO', 
		  	'descripcion':'Somos Mavimovil, una empresa que caracteriza en desarrollar soluciones tecnológicas a medida, integrando los entornos tecnológicos que nuestros clientes utiliza. Somos Mavimovil, una empresa que caracteriza en desarrollar soluciones tecnológicas a medida, integrando los entornos tecnológicos que nuestros clientes utiliza. Somos Mavimovil, una empresa que caracteriza en desarrollar.', 
		  	'btn_vermas':null, 
		  	'btn_playstore':null, 
		  	'btn_appstore':null
		  },

		  {
	  		'fondo_url':null, 
		  	'titulo':'FINANCIERO', 
		  	'subtitulo':'CRM BUHO', 
		  	'descripcion':'Somos Mavimovil, una empresa que caracteriza en desarrollar soluciones tecnológicas a medida, integrando los entornos tecnológicos que nuestros clientes utiliza. Somos Mavimovil, una empresa que caracteriza en desarrollar soluciones tecnológicas a medida, integrando los entornos tecnológicos que nuestros clientes utiliza. Somos Mavimovil, una empresa que caracteriza en desarrollar.', 
		  	'btn_vermas':null, 
		  	'btn_playstore':null, 
		  	'btn_appstore':null
		  },

		  {
	  		'fondo_url':null, 
		  	'titulo':'FINANCIERO', 
		  	'subtitulo':'CRM BUHO', 
		  	'descripcion':'Somos Mavimovil, una empresa que caracteriza en desarrollar soluciones tecnológicas a medida, integrando los entornos tecnológicos que nuestros clientes utiliza. Somos Mavimovil, una empresa que caracteriza en desarrollar soluciones tecnológicas a medida, integrando los entornos tecnológicos que nuestros clientes utiliza. Somos Mavimovil, una empresa que caracteriza en desarrollar.', 
		  	'btn_vermas':null, 
		  	'btn_playstore':null, 
		  	'btn_appstore':null
		  },
		 ];

 		

 		$scope.anterior_plataforma = function (index) {
 			if (index==0) {
 			$scope.plataforma_selected = $scope.plataformas.length-1;
	 		} else {
	 			$scope.plataforma_selected = index-1;
	 		}
	 	}

	 	$scope.siguiente_plataforma = function (index) {
 			if (index==$scope.plataformas.length-1) {
 			$scope.plataforma_selected = 0;
	 		} else {
	 			$scope.plataforma_selected = index+1;
	 		}
	 	}

	 	$scope.seleccionar_plataforma = function (index) {
 			$scope.plataforma_selected = index;
	 	}

	 	$('body').show();

	  });
  </script>
</body></html>
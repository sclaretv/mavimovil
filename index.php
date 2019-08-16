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

		<div class="container">
			<div id="carousel-plataformas" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#carousel-plataformas" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-plataformas" data-slide-to="1"></li>
			    <li data-target="#carousel-plataformas" data-slide-to="2"></li>
			    <li data-target="#carousel-plataformas" data-slide-to="3"></li>
			    <li data-target="#carousel-plataformas" data-slide-to="4"></li>
			    <li data-target="#carousel-plataformas" data-slide-to="5"></li>
			    <li data-target="#carousel-plataformas" data-slide-to="6"></li>
			    <li data-target="#carousel-plataformas" data-slide-to="7"></li>
			    <li data-target="#carousel-plataformas" data-slide-to="8"></li>
			    <li data-target="#carousel-plataformas" data-slide-to="9"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
			    <div class="item active">
			      <img src="..." alt="...">
			      
			    </div>
			    <div class="item">
			      <img src="..." alt="...">
			      
			    </div>
			    <div class="item">
			      <img src="..." alt="...">
			      
			    </div>
			    <div class="item">
			      <img src="..." alt="...">
			      
			    </div>
			    <div class="item">
			      <img src="..." alt="...">
			      
			    </div>
			    <div class="item">
			      <img src="..." alt="...">
			      
			    </div>
			    <div class="item">
			      <img src="..." alt="...">
			      
			    </div>
			    <div class="item">
			      <img src="..." alt="...">
			      
			    </div>
			    <div class="item">
			      <img src="..." alt="...">
			      
			    </div>
			    <div class="item">
			      <img src="..." alt="...">
			      
			    </div>
			    
			  </div>

			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousel-plataformas" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#carousel-plataformas" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
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


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


    var slider1 = $(".slider1");
	    var slider2 = $(".slider2");
	    var slider3 = $(".slider3");
	    var sliders = $(".slider1,.slider2,.slider3");

	    var btn_slide_1 = $("#index-apps");
	    var btn_slide_2 = $("#index-plat");
	    var btn_slide_3 = $("#index-inte");
	    var btn_slides = $("#index-apps, #index-plat, #index-inte");
 
    function cambia_slide(n){  
    	sliders.removeClass("active").addClass("hide"); 
    	btn_slides.removeClass("active"); 
    	if(n == 1){
    		slider1.removeClass("hide").addClass("active");
    		btn_slide_1.addClass("active");
    	}
    	if(n == 2){
    		slider2.removeClass("hide").addClass("active");
    		btn_slide_2.addClass("active");
    	}
    	if(n == 3){
    		slider3.removeClass("hide").addClass("active");
    		btn_slide_3.addClass("active");
    	}
    } 

  	// sliders index
  	btn_slide_1.click(function() { cambia_slide(1); }); 
    btn_slide_2.click(function() { cambia_slide(2); }); 
    btn_slide_3.click(function() { cambia_slide(3); });


    // carousel tecnologias
  $('.carousel-tecnologias').slick({
    dots: false,
    infinite: true,
    slidesToShow: 6,
    slidesToScroll: 1,
    arrows: true,
    prevArrow:"<img class='a-left control-c prev slick-prev' src='assets/web/img/slider-cliente-izquierda.svg'>",
    nextArrow:"<img class='a-right control-c next slick-next' src='assets/web/img/slider-cliente-derecha.svg'>",
    responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: false
        }
      }
    ]
  });
  


    // carousel clientes
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


var app = angular.module('mavimovilApp',[]);



app.controller('Mavimovil', function($scope, $timeout) {

  $scope.data_s =[
    {  
      'titulo':'ESTILO DE VIDA', 
      'subtitulo':'Mi Autofin',   
      'imagenes' :['assets/web/img/solutions/0.png','assets/web/img/solutions/1.png','assets/web/img/solutions/3.png'],
      'descripciones':['texto a','texto b','texto c'], 
      'btn_icono':'assets/web/img/solutions/nav-slider-solutions-1.svg',  
      'playstore':'/link_falso', 
      'appstore':'/link_falso'
    } ,

    {  
      'titulo':'ESTILO DE VIDA', 
      'subtitulo':'Mi Autofin',   
      'imagenes' :['assets/web/img/solutions/3.png','assets/web/img/solutions/5.png','assets/web/img/solutions/6.png'],
      'descripciones':['texto de a','texto de b','texto de c'], 
      'btn_icono':'assets/web/img/solutions/nav-slider-solutions-3.svg',  
      'playstore':'/link_falso', 
      'appstore':'/link_falso'
    } 
    ]; 


	$scope.data_p =[
		{  
			'titulo':'ESTILO DE VIDA', 
			'subtitulo':'CRM BUHO',   
			'imagenes' :['assets/web/img/plataformas/0.png','assets/web/img/plataformas/1.png','assets/web/img/plataformas/3.png'],
			'descripciones':['Plataforma web diseñada para que los agentes de venta de Autofin S.A. puedan comunicarse con los clientes y usuarios de la aplicación Búho Autofin.'], 
			'btn_icono':'assets/web/img/plataformas/platform-navegation-icon-1.svg',  
			
			'enlace':'/link_falso'
		} ,

		{  
			'titulo':'ESTILO DE VIDA', 
			'subtitulo':'Autofin SOS',   
			'imagenes' :['assets/web/img/plataformas/3.png','assets/web/img/plataformas/5.png','assets/web/img/plataformas/6.png'],
			'descripciones':['Plataforma web para brindar asistencia al personal en terreno de Autofin S.A.'], 
			'btn_icono':'assets/web/img/plataformas/platform-navegation-icon-3.svg',  
			
			'enlace':'/link_falso'
		} ,

    {  
      'titulo':'ESTILO DE VIDA', 
      'subtitulo':'Plataforma Ticket Autofin',   
      'imagenes' :['assets/web/img/plataformas/3.png','assets/web/img/plataformas/5.png','assets/web/img/plataformas/6.png'],
      'descripciones':['Plataforma web para realizar la creación y seguimiento a las tareas comerciales de Autofin S.A.'], 
      'btn_icono':'assets/web/img/plataformas/platform-navegation-icon-3.svg',  
      
      'enlace':'/link_falso'
    } 
		]; 

 
  

	$('body').show();

});




app.controller('slider', function($scope, $timeout) {

  $scope.data = [];  
  $scope.index_item_selected=0;
  $scope.item ={}; 
  $scope.imagen_item ='';
  $scope.desc_item = '';

  $scope.set_imagen_item = function (index) { 
    $scope.imagen_item = '';
    $scope.imagen_item = $scope.item.imagenes[index]; 
     // $timeout(function() { $scope.imagen_item = $scope.item.imagenes[index]; }, 1); 
  }

  $scope.d_index = 0;

  $scope.next_desc_item = function (set_cero) {  
    if(set_cero==1){
      $scope.d_index = 0;
    }else{
      if ($scope.d_index==$scope.item.descripciones.length-1) {
        $scope.d_index = 0;
      } else {
        $scope.d_index = $scope.d_index+1;
      }
    } 
    $scope.desc_item = $scope.item.descripciones[$scope.d_index];
  }

  $scope.anterior_item = function (index) { 
    if (index==0) {
      $scope.seleccionar_item($scope.data.length-1);
    } else {
      $scope.seleccionar_item(index-1);
    }
  } 

  $scope.siguiente_item = function (index) {
    if (index==$scope.data.length-1) {
      $scope.seleccionar_item(0);
    } else {
      $scope.seleccionar_item(index+1);
    }
  } 

  $scope.seleccionar_item = function (index) { 
    $scope.index_item_selected = index;
    $scope.item = $scope.data[index];  
    $scope.next_desc_item(1)
    $scope.set_imagen_item(0);
  } 

  $scope.init = function(data){
    $scope.data = data;
    $scope.seleccionar_item(0);
  }  

});
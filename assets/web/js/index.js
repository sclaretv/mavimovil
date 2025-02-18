

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



app.controller('Mavimovil', function($scope, $timeout, $sce) {

  $scope.data_s =[
    {  
      'titulo':'', 
      'subtitulo':'CRM BUHO',   
      'imagenes' :['assets/web/img/solutions/buho-1.png','assets/web/img/solutions/buho-2.png','assets/web/img/solutions/buho-3.png'],
      'texto1':$sce.trustAsHtml('Búho es una App que permite adquirir un nuevo vehículo, desde la búsqueda de la mejor opción, hasta el financiamiento.'),
      'texto2':$sce.trustAsHtml('Tecnologías que CRM BUHO usa:'), 
  'iconos':[
    'solutions/app-app.svg',
    'solutions/crm-app.svg',
    'solutions/machinevision-app.svg',
    'solutions/integracion-app.svg',
    'solutions/agendamiento.svg',
    'solutions/chat-app.svg',
    'solutions/notifier-app.svg',
    'solutions/sic-app.svg'
    ], 
      'btn_icono':'assets/web/img/solutions/app-navegation-icon-0.svg',  
      'playstore':'/link_falso', 
      'appstore':'/link_falso'
    } ,

    {  
      'titulo':'', 
      'subtitulo':'MI AUTOFIN',   
      'imagenes' :['assets/web/img/solutions/miautofin-1.png','assets/web/img/solutions/miautofin-2.png','assets/web/img/solutions/miautofin-3.png'],
      'texto1':$sce.trustAsHtml('App MI Autofin es una aplicación móvil multi-propósito que a través de un llavero bluetooth te permite encontrar tus llaves y tu celular.'),
      'texto2':$sce.trustAsHtml('Tecnologías que MI Autofin usa:'), 
  'iconos':[
    'solutions/app-app.svg',
    'solutions/proximity-app.svg',
    'solutions/beacons-app.svg',
    'solutions/plataforma-monitoreo-app.svg',
    'solutions/sos-app.svg',
    'solutions/geolocalizacion-app.svg',
    'solutions/notifier-app.svg',
    'solutions/sic-app.svg'
    ], 
      'btn_icono':'assets/web/img/solutions/app-navegation-icon-1.svg',  
      'playstore':'/link_falso', 
      'appstore':'/link_falso'
    },

    {  
      'titulo':'', 
      'subtitulo':'BK SPA',   
      'imagenes' :['assets/web/img/solutions/bk-1.png','assets/web/img/solutions/bk-2.png','assets/web/img/solutions/bk-3.png'],
      'texto1':$sce.trustAsHtml('BK es la app diseñada para hacer más eficiente la gestión de los ejecutivos en terreno, apoyado por una potente plataforma y el personal de BK.'),
      'texto2':$sce.trustAsHtml('Tecnologías que BK SPA usa:'), 
  'iconos':[
    'solutions/app-app.svg',
    'solutions/agendamiento.svg',
    'solutions/geolocalizacion-app.svg',
    'solutions/plataforma-agendamiento-app.svg',
    'solutions/notifier-app.svg',
    'solutions/sic-app.svg'
    ], 
      'btn_icono':'assets/web/img/solutions/app-navegation-icon-2.svg',  
      'playstore':'/link_falso', 
      'appstore':'/link_falso'
    },

    {  
      'titulo':'', 
      'subtitulo':'BIKE SANTIAGO',   
      'imagenes' :['assets/web/img/solutions/bikesantiago-1.png','assets/web/img/solutions/bikesantiago-2.png','assets/web/img/solutions/bikesantiago-3.png'],
      'texto1':$sce.trustAsHtml('Bike Santiago es la primera aplicación de Chile de arriendo de bicicletas, para clientes del Banco Itau.'),
      'texto2':$sce.trustAsHtml('Tecnologías que Bike Santiago usa:'), 
  'iconos':[
    'solutions/app-app.svg',
    'solutions/proximity-app.svg',
    'solutions/integracion-zendesk-app.svg',
    'solutions/sos-app.svg',
    'solutions/geolocalizacion-app.svg',
    'solutions/notifier-app.svg',
    'solutions/sic-app.svg'
    ], 
      'btn_icono':'assets/web/img/solutions/app-navegation-icon-3.svg',  
      'playstore':'/link_falso', 
      'appstore':'/link_falso'
    },

    {  
      'titulo':'', 
      'subtitulo':'BLOCKASSIST',   
      'imagenes' :['assets/web/img/solutions/blockassist-1.png','assets/web/img/solutions/blockassist-2.png','assets/web/img/solutions/blockassist-3.png'],
      'texto1':$sce.trustAsHtml('Producto exclusivo para mercado automotriz de alta gama que está conformado por un kit gps con garantía de homologación y certificación de la marca.'),
      'texto2':$sce.trustAsHtml('Tecnologías que BLOCKASSIST usa:'), 
  'iconos':[
    'solutions/app-app.svg',
    'solutions/sos-app.svg',
    'solutions/geolocalizacion-app.svg',
    'solutions/notifier-app.svg',
    'solutions/plataforma-gps-app.svg',
    'solutions/sic-app.svg'
    ], 
      'btn_icono':'assets/web/img/solutions/app-navegation-icon-4.svg',  
      'playstore':'/link_falso', 
      'appstore':'/link_falso'
    },

    {  
      'titulo':'', 
      'subtitulo':'RED SALUD',   
      'imagenes' :['assets/web/img/solutions/redsalud-1.png','assets/web/img/solutions/redsalud-2.png','assets/web/img/solutions/redsalud-3.png'],
      'texto1':$sce.trustAsHtml('Esta Aplicación ofrece la solución de inteligente y tecnológica de incidencias que puedan ocurrir en los centros médicos RedSalud.'),
       'texto2':$sce.trustAsHtml('Tecnologías que RED SALUD usa:'), 
  'iconos':[
    'solutions/app-app.svg',
    'solutions/plataofrma-auditoria-app.svg',
    'solutions/integracion-sap-app.svg',
    'solutions/qr-app.svg',
    'solutions/notifier-app.svg',
    'solutions/sic-app.svg'
    ], 
      'btn_icono':'assets/web/img/solutions/app-navegation-icon-5.svg',  
      'playstore':'/link_falso', 
      'appstore':'/link_falso'
    }]; 


	$scope.data_p =[
		{  
			'titulo':'', 
			'subtitulo':'CRM BUHO',   
			'imagenes' :['assets/web/img/plataformas/plataforma-crmbuho-1.png','assets/web/img/plataformas/plataforma-crmbuho-2.png','assets/web/img/plataformas/plataforma-crmbuho-3.png'],
			'texto1':$sce.trustAsHtml('La Plataforma CRM reune todas las herramientas para realizar un seguimiento a los clientes.'),
      'texto2':$sce.trustAsHtml('Tecnologías que CRM BUHO usa:'), 
  'iconos':[
    'plataformas/chat-plat.svg',
    'plataformas/integracion-plat.svg',
    'plataformas/seguimiento-plat.svg',
    'plataformas/analytics-plat.svg',
    'plataformas/notifier-plat.svg',
    'plataformas/sic-plat.svg'
    ], 
      'btn_icono':'assets/web/img/plataformas/platform-navegation-icon-0.svg',  
			
			'enlace':'/link_falso'
		}, 

		{  
			'titulo':'', 
			'subtitulo':'BK SPA',   
			'imagenes' :['assets/web/img/plataformas/plataforma-bk-1.png','assets/web/img/plataformas/plataforma-bk-2.png','assets/web/img/plataformas/plataforma-bk-3.png'],
			'texto1':$sce.trustAsHtml('Plataforma de gestión, agendamiento y seguimiento a todos los casos que los ejecutivos en terreno realizan.'),
      'texto2':$sce.trustAsHtml('Tecnologías que BK SPA usa:'), 
  'iconos':[
    'plataformas/agendamiento-plat.svg',
    'plataformas/geolocalizacion-plat.svg',
    'plataformas/notifier-plat.svg',
    'plataformas/sic-plat.svg'
    ], 
			'btn_icono':'assets/web/img/plataformas/platform-navegation-icon-1.svg',  
			
			'enlace':'/link_falso'
		} ,

    {  
      'titulo':'', 
      'subtitulo':'GLA MALL PLAZA',   
      'imagenes' :['assets/web/img/plataformas/plataforma-gla-1.png','assets/web/img/plataformas/plataforma-gla-2.png','assets/web/img/plataformas/plataforma-gla-3.png'],
      'texto1':$sce.trustAsHtml('La plataforma GLA permite vizualizar, trazar y configurar los planos y mapas de edificios comerciales, otorgando control y precisión.'),
      'texto2':$sce.trustAsHtml('Tecnologías que GLA MALL PLAZA usa:'), 
  'iconos':[
    'plataformas/geolocalizacion-indoor-plat.svg',
    'plataformas/integracion-sap-plat.svg',
    'plataformas/beacons-plat.svg',
    'plataformas/sic-plat.svg'
    ], 
      'btn_icono':'assets/web/img/plataformas/platform-navegation-icon-2.svg',  
      
      'enlace':'/link_falso'
    },

    {  
      'titulo':'', 
      'subtitulo':'MaviGPS',   
      'imagenes' :['assets/web/img/plataformas/plataforma-mavigps-1.png','assets/web/img/plataformas/plataforma-mavigps-2.png','assets/web/img/plataformas/plataforma-mavigps-3.png'],
      'texto1':$sce.trustAsHtml('La Plataforma MaviGPS es el avance tecnológico más importante en el mercado GPS del país, ya que responde a una visión vanguardista.'),
      'texto2':$sce.trustAsHtml('Tecnologías que MaviGPS usa:'), 
  'iconos':[
    'plataformas/crm-plat.svg',
    'plataformas/geolocalizacion-plat.svg',
    'plataformas/integracion-plat.svg',
    'plataformas/sic-plat.svg'
    ], 
      'btn_icono':'assets/web/img/plataformas/platform-navegation-icon-3.svg',  
      
      'enlace':'/link_falso'
    },

    {  
      'titulo':'', 
      'subtitulo':'Proximity',   
      'imagenes' :['assets/web/img/plataformas/plataforma-Proximity-1.png','assets/web/img/plataformas/plataforma-Proximity-2.png','assets/web/img/plataformas/plataforma-Proximity-3.png'],
      'texto1':$sce.trustAsHtml('Con la Plataforma Proximity podrás realizar campañas de Marketing de Proximidad más interesantes y novedosos del mercado publicitario.'),
      'texto2':$sce.trustAsHtml('Tecnologías que Proximity usa:'), 
  'iconos':[
    'plataformas/proximity-plat.svg',
    'plataformas/geolocalizacion-plat.svg',
    'plataformas/geolocalizacion-indoor-plat.svg',
    'plataformas/analytics-plat.svg',
    'plataformas/beacons-plat.svg',
    'plataformas/notifier-plat.svg',
    'plataformas/sic-plat.svg'
    ], 
      'btn_icono':'assets/web/img/plataformas/platform-navegation-icon-4.svg',  
      
      'enlace':'/link_falso'
    },


    {  
      'titulo':'', 
      'subtitulo':'SOS',   
      'imagenes' :['assets/web/img/plataformas/plataforma-sos-1.png','assets/web/img/plataformas/plataforma-sos-2.png','assets/web/img/plataformas/plataforma-sos-3.png'],
      'texto1':$sce.trustAsHtml('Plataforma de monitoreo y seguimiento de personas online.'),
      'texto2':$sce.trustAsHtml('Tecnologías que SOS usa:'), 
  'iconos':[
    'plataformas/geolocalizacion-plat.svg',
    'plataformas/sos-plat.svg',
    'plataformas/notifier-plat.svg',
    'plataformas/analytics-plat.svg',
    'plataformas/sic-plat.svg'
    ], 
      'btn_icono':'assets/web/img/plataformas/platform-navegation-icon-5.svg',  
      
      'enlace':'/link_falso'
    }]; 

 
  

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
    $scope.autoplay_img(index);
    //$timeout(function() { $scope.imagen_item = $scope.item.imagenes[index]; }, 3); 
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
    //$scope.next_desc_item(1)
    $timeout.cancel(timer);
    $scope.set_imagen_item(0);
  } 
  var timer;
  $scope.autoplay_img = function (index) {
    timer = $timeout(function() { 
      index++;
      if (index>2) {
        index = 0;
      }
      $scope.set_imagen_item(index);
    }, 3000); 
  }

  $scope.init = function(data){
    $scope.data = data;
    $scope.seleccionar_item(0);
  }

  $scope.set_timer = function(index){
    $timeout.cancel(timer);
    $scope.set_imagen_item(index);
  }  

});
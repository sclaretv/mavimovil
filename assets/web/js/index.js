

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
      'descripciones':[
      {'texto':$sce.trustAsHtml('Búho es una App que permite adquirir un nuevo vehículo, desde la búsqueda de la mejor opción, hasta el financiamiento, teniendo la opción de hacer un seguimiento constante.')},
      {'texto':$sce.trustAsHtml('Tecnologías que CRM BUHO usa:'), 
  'imagenes':[
    'solutions/app-app.svg',
    'solutions/crm-app.svg',
    'solutions/machinevision-app.svg',
    'solutions/integracion-app.svg',
    'solutions/agendamiento.svg',
    'solutions/chat-app.svg',
    'solutions/notifier-app.svg',
    'solutions/sic-app.svg'
    ]}
    ], 
      'btn_icono':'assets/web/img/solutions/app-navegation-icon-0.svg',  
      'playstore':'/link_falso', 
      'appstore':'/link_falso'
    } ,

    {  
      'titulo':'', 
      'subtitulo':'MI AUTOFIN',   
      'imagenes' :['assets/web/img/solutions/miautofin-1.png','assets/web/img/solutions/miautofin-2.png','assets/web/img/solutions/miautofin-3.png'],
      'descripciones':[
      {'texto':$sce.trustAsHtml('App MI Autofin es una aplicación móvil multi-propósito que a través de un llavero bluetooth te permite de manera sencilla encontrar tus llaves y tu celular. Cuenta además con un botón de pánico de seguridad para apoyo telefónico en caso de emergencia. MI AUTOFIN es un canal de comunicación directo con el mundo Autofin para que puedas estar siempre conectado, recibir asistencia en línea, pagar tu cuota, recibir notificaciones, ofertas y descuentos especiales para Clientes.')},
      {'texto':$sce.trustAsHtml('Tecnologías que MI Autofin usa:'), 
  'imagenes':[
    'solutions/app-app.svg',
    'solutions/proximity-app.svg',
    'solutions/beacons-app.svg',
    'solutions/plataforma-monitoreo-app.svg',
    'solutions/sos-app.svg',
    'solutions/geolocalizacion-app.svg',
    'solutions/notifier-app.svg',
    'solutions/sic-app.svg'
    ]}
    ], 
      'btn_icono':'assets/web/img/solutions/app-navegation-icon-1.svg',  
      'playstore':'/link_falso', 
      'appstore':'/link_falso'
    },

    {  
      'titulo':'', 
      'subtitulo':'BK SPA',   
      'imagenes' :['assets/web/img/solutions/bk-1.png','assets/web/img/solutions/bk-2.png','assets/web/img/solutions/bk-3.png'],
      'descripciones':[
      {'texto':$sce.trustAsHtml('BK es la app diseñada para hacer más eficiente la gestión de los ejecutivos en terreno, apoyado por una potente plataforma, el personal de BK y todas sus firmas, logra hacer una gestión empecable.')},
      {'texto':$sce.trustAsHtml('Tecnologías que BK SPA usa:'), 
  'imagenes':[
    'solutions/app-app.svg',
    'solutions/agendamiento.svg',
    'solutions/geolocalizacion-app.svg',
    'solutions/plataforma-agendamiento-app.svg',
    'solutions/notifier-app.svg',
    'solutions/sic-app.svg'
    ]}
    ], 
      'btn_icono':'assets/web/img/solutions/app-navegation-icon-2.svg',  
      'playstore':'/link_falso', 
      'appstore':'/link_falso'
    },

    {  
      'titulo':'', 
      'subtitulo':'BIKE SANTIAGO',   
      'imagenes' :['assets/web/img/solutions/bikesantiago-1.png','assets/web/img/solutions/bikesantiago-2.png','assets/web/img/solutions/bikesantiago-3.png'],
      'descripciones':[
      {'texto':$sce.trustAsHtml('Bike Santiago es la primera aplicación de Chile de arriendo de bicicletas, para clientes del Banco Itau. Es una aplicación que revolución en su momento el traslado urbano de 0 emisión de partículas de carbono. ')},
      {'texto':$sce.trustAsHtml('Tecnologías que Bike Santiago usa:'), 
  'imagenes':[
    'solutions/app-app.svg',
    'solutions/proximity-app.svg',
    'solutions/integracion-zendesk-app.svg',
    'solutions/sos-app.svg',
    'solutions/geolocalizacion-app.svg',
    'solutions/notifier-app.svg',
    'solutions/sic-app.svg'
    ]}
    ], 
      'btn_icono':'assets/web/img/solutions/app-navegation-icon-3.svg',  
      'playstore':'/link_falso', 
      'appstore':'/link_falso'
    },

    {  
      'titulo':'', 
      'subtitulo':'BLOCKASSIST',   
      'imagenes' :['assets/web/img/solutions/blockassist-1.png','assets/web/img/solutions/blockassist-2.png','assets/web/img/solutions/blockassist-3.png'],
      'descripciones':[
      {'texto':$sce.trustAsHtml('Producto exclusivo para mercado automotriz de alta gama que está conformado por un kit gps con garantía de homologación y certificación de la marca,  una app personalizada para el usuario con sistema de detención en caso de robo, y una aplicación web de información para la automora para realizar revisiones preventivas de mantención.')},
      {'texto':$sce.trustAsHtml('Tecnologías que BLOCKASSIST usa:'), 
  'imagenes':[
    'solutions/app-app.svg',
    'solutions/sos-app.svg',
    'solutions/geolocalizacion-app.svg',
    'solutions/notifier-app.svg',
    'solutions/plataforma-gps-app.svg',
    'solutions/sic-app.svg'
    ]}
    ], 
      'btn_icono':'assets/web/img/solutions/app-navegation-icon-4.svg',  
      'playstore':'/link_falso', 
      'appstore':'/link_falso'
    },

    {  
      'titulo':'', 
      'subtitulo':'RED SALUD',   
      'imagenes' :['assets/web/img/solutions/redsalud-1.png','assets/web/img/solutions/redsalud-2.png','assets/web/img/solutions/redsalud-3.png'],
      'descripciones':[
      {'texto':$sce.trustAsHtml('Esta Aplicación ofrece la solución de inteligente y tecnológica de incidencias que puedan ocurrir en los centros médicos RedSalud.')},
       {'texto':$sce.trustAsHtml('Tecnologías que RED SALUD usa:'), 
  'imagenes':[
    'solutions/app-app.svg',
    'solutions/plataofrma-auditoria-app.svg',
    'solutions/integracion-sap-app.svg',
    'solutions/qr-app.svg',
    'solutions/notifier-app.svg',
    'solutions/sic-app.svg'
    ]}
    ], 
      'btn_icono':'assets/web/img/solutions/app-navegation-icon-5.svg',  
      'playstore':'/link_falso', 
      'appstore':'/link_falso'
    }]; 


	$scope.data_p =[
		{  
			'titulo':'ESTILO DE VIDA', 
			'subtitulo':'CRM BUHO',   
			'imagenes' :['assets/web/img/plataformas/0.png','assets/web/img/plataformas/1.png','assets/web/img/plataformas/3.png'],
			'descripciones':[
       {'texto':$sce.trustAsHtml('Plataforma web diseñada para que los agentes de venta de Autofin S.A. puedan comunicarse con los clientes y usuarios de la aplicación Búho Autofin.')},
      {'texto':$sce.trustAsHtml('Tecnologías que CRM BUHO usa:'), 
  'imagenes':[
    'technology-icon-1.svg',
    'technology-icon-2.svg',
    'technology-icon-3.svg',
    'technology-icon-4.svg',
    'technology-icon-5.svg',
    'technology-icon-6.svg',
    'technology-icon-7.svg',
    'technology-icon-8.svg',
    'technology-icon-9.svg',
    'technology-icon-10.svg',
    'technology-icon-11.svg',
    'technology-icon-12.svg'
    ]}
    ], 
      'btn_icono':'assets/web/img/plataformas/platform-navegation-icon-0.svg',  
			
			'enlace':'/link_falso'
		}, 

		{  
			'titulo':'ESTILO DE VIDA', 
			'subtitulo':'Autofin SOS',   
			'imagenes' :['assets/web/img/plataformas/1.png','assets/web/img/plataformas/5.png','assets/web/img/plataformas/6.png'],
			'descripciones':[
       {'texto':$sce.trustAsHtml('Plataforma web para brindar asistencia al personal en terreno de Autofin S.A.')},
      {'texto':$sce.trustAsHtml('Tecnologías que Autofin SOS usa:'), 
  'imagenes':[
    'technology-icon-1.svg',
    'technology-icon-2.svg',
    'technology-icon-3.svg',
    'technology-icon-4.svg',
    'technology-icon-5.svg',
    'technology-icon-6.svg',
    'technology-icon-7.svg',
    'technology-icon-8.svg',
    'technology-icon-9.svg',
    'technology-icon-10.svg',
    'technology-icon-11.svg',
    'technology-icon-12.svg'
    ]}
    ], 
			'btn_icono':'assets/web/img/plataformas/platform-navegation-icon-1.svg',  
			
			'enlace':'/link_falso'
		} ,

    {  
      'titulo':'ESTILO DE VIDA', 
      'subtitulo':'Plataforma Ticket Autofin',   
      'imagenes' :['assets/web/img/plataformas/2.png','assets/web/img/plataformas/5.png','assets/web/img/plataformas/6.png'],
      'descripciones':[
       {'texto':$sce.trustAsHtml('Plataforma web para realizar la creación y seguimiento a las tareas comerciales de Autofin S.A.')},
      {'texto':$sce.trustAsHtml('Tecnologías que Plataforma Ticket Autofin usa:'), 
  'imagenes':[
    'technology-icon-1.svg',
    'technology-icon-2.svg',
    'technology-icon-3.svg',
    'technology-icon-4.svg',
    'technology-icon-5.svg',
    'technology-icon-6.svg',
    'technology-icon-7.svg',
    'technology-icon-8.svg',
    'technology-icon-9.svg',
    'technology-icon-10.svg',
    'technology-icon-11.svg',
    'technology-icon-12.svg'
    ]}
    ], 
      'btn_icono':'assets/web/img/plataformas/platform-navegation-icon-2.svg',  
      
      'enlace':'/link_falso'
    },

    {  
      'titulo':'ESTILO DE VIDA', 
      'subtitulo':'Autofin Proximity',   
      'imagenes' :['assets/web/img/plataformas/3.png','assets/web/img/plataformas/5.png','assets/web/img/plataformas/6.png'],
      'descripciones':[
       {'texto':$sce.trustAsHtml('Plataforma web para realizar la creación de campañas interactivas para los clientes de la Aplicación Mi Autofin.')},
      {'texto':$sce.trustAsHtml('Tecnologías que Autofin Proximity usa:'), 
  'imagenes':[
    'technology-icon-1.svg',
    'technology-icon-2.svg',
    'technology-icon-3.svg',
    'technology-icon-4.svg',
    'technology-icon-5.svg',
    'technology-icon-6.svg',
    'technology-icon-7.svg',
    'technology-icon-8.svg',
    'technology-icon-9.svg',
    'technology-icon-10.svg',
    'technology-icon-11.svg',
    'technology-icon-12.svg'
    ]}
    ], 
      'btn_icono':'assets/web/img/plataformas/platform-navegation-icon-3.svg',  
      
      'enlace':'/link_falso'
    },

    {  
      'titulo':'ESTILO DE VIDA', 
      'subtitulo':'Mallplaza GLA',   
      'imagenes' :['assets/web/img/plataformas/6.png','assets/web/img/plataformas/5.png','assets/web/img/plataformas/6.png'],
      'descripciones':[
       {'texto':$sce.trustAsHtml('Plataforma web de geolocalización indoor interactivo, en donde se puede hacer un seguimiento a la actividad de cada mall.')},
      {'texto':$sce.trustAsHtml('Tecnologías que Mallplaza GLA usa:'), 
  'imagenes':[
    'technology-icon-1.svg',
    'technology-icon-2.svg',
    'technology-icon-3.svg',
    'technology-icon-4.svg',
    'technology-icon-5.svg',
    'technology-icon-6.svg',
    'technology-icon-7.svg',
    'technology-icon-8.svg',
    'technology-icon-9.svg',
    'technology-icon-10.svg',
    'technology-icon-11.svg',
    'technology-icon-12.svg'
    ]}
    ], 
      'btn_icono':'assets/web/img/plataformas/platform-navegation-icon-4.svg',  
      
      'enlace':'/link_falso'
    },


    {  
      'titulo':'ESTILO DE VIDA', 
      'subtitulo':'Mallplaza Locales',   
      'imagenes' :['assets/web/img/plataformas/4.png','assets/web/img/plataformas/5.png','assets/web/img/plataformas/6.png'],
      'descripciones':[
       {'texto':$sce.trustAsHtml('Plataforma web para visualizar y auditar las ventas de cada mall.')},
      {'texto':$sce.trustAsHtml('Tecnologías que Mallplaza Locales usa:'), 
  'imagenes':[
    'technology-icon-1.svg',
    'technology-icon-2.svg',
    'technology-icon-3.svg',
    'technology-icon-4.svg',
    'technology-icon-5.svg',
    'technology-icon-6.svg',
    'technology-icon-7.svg',
    'technology-icon-8.svg',
    'technology-icon-9.svg',
    'technology-icon-10.svg',
    'technology-icon-11.svg',
    'technology-icon-12.svg'
    ]}
    ], 
      'btn_icono':'assets/web/img/plataformas/platform-navegation-icon-5.svg',  
      
      'enlace':'/link_falso'
    },

    {  
      'titulo':'ESTILO DE VIDA', 
      'subtitulo':'Mallplaza Auditoría',   
      'imagenes' :['assets/web/img/plataformas/5.png','assets/web/img/plataformas/5.png','assets/web/img/plataformas/6.png'],
      'descripciones':[
       {'texto':$sce.trustAsHtml('Plataforma web para auditar eventuales incidencias que existan en los malls.')},
      {'texto':$sce.trustAsHtml('Tecnologías que Mallplaza Auditoría usa:'), 
  'imagenes':[
    'technology-icon-1.svg',
    'technology-icon-2.svg',
    'technology-icon-3.svg',
    'technology-icon-4.svg',
    'technology-icon-5.svg',
    'technology-icon-6.svg',
    'technology-icon-7.svg',
    'technology-icon-8.svg',
    'technology-icon-9.svg',
    'technology-icon-10.svg',
    'technology-icon-11.svg',
    'technology-icon-12.svg'
    ]}
    ], 
      'btn_icono':'assets/web/img/plataformas/platform-navegation-icon-6.svg',  
      
      'enlace':'/link_falso'
    },

    {  
      'titulo':'ESTILO DE VIDA', 
      'subtitulo':'RedSalud Auditoría',   
      'imagenes' :['assets/web/img/plataformas/7.png','assets/web/img/plataformas/5.png','assets/web/img/plataformas/6.png'],
      'descripciones':[
       {'texto':$sce.trustAsHtml('Plataforma web para auditar eventuales incidencias que existan en los centro médicos RedSalud.')},
      {'texto':$sce.trustAsHtml('Tecnologías que RedSalud Auditoría usa:'), 
  'imagenes':[
    'technology-icon-1.svg',
    'technology-icon-2.svg',
    'technology-icon-3.svg',
    'technology-icon-4.svg',
    'technology-icon-5.svg',
    'technology-icon-6.svg',
    'technology-icon-7.svg',
    'technology-icon-8.svg',
    'technology-icon-9.svg',
    'technology-icon-10.svg',
    'technology-icon-11.svg',
    'technology-icon-12.svg'
    ]}
    ], 
      'btn_icono':'assets/web/img/plataformas/platform-navegation-icon-7.svg',  
      
      'enlace':'/link_falso'
    },

    {  
      'titulo':'ESTILO DE VIDA', 
      'subtitulo':'Autofin Meeting',   
      'imagenes' :['assets/web/img/plataformas/8.png','assets/web/img/plataformas/5.png','assets/web/img/plataformas/6.png'],
      'descripciones':[
       {'texto':$sce.trustAsHtml('Plataforma web para realizar videoconferencias para todo el equipo de Autofin S.A. Además tiene innovadoras herramientas para que las reuniones sean muy productivas.')},
      {'texto':$sce.trustAsHtml('Tecnologías que Autofin Meeting usa:'), 
  'imagenes':[
    'technology-icon-1.svg',
    'technology-icon-2.svg',
    'technology-icon-3.svg',
    'technology-icon-4.svg',
    'technology-icon-5.svg',
    'technology-icon-6.svg',
    'technology-icon-7.svg',
    'technology-icon-8.svg',
    'technology-icon-9.svg',
    'technology-icon-10.svg',
    'technology-icon-11.svg',
    'technology-icon-12.svg'
    ]}
    ], 
      'btn_icono':'assets/web/img/plataformas/platform-navegation-icon-9-sindefinir.svg',  
      
      'enlace':'/link_falso'
    },

    {  
      'titulo':'ESTILO DE VIDA', 
      'subtitulo':'Plataforma Ticket MaviGPS',   
      'imagenes' :['assets/web/img/plataformas/9.png','assets/web/img/plataformas/5.png','assets/web/img/plataformas/6.png'],
      'descripciones':[
       {'texto':$sce.trustAsHtml('Plataforma web para realizar la creación y seguimiento a las tareas de instalación y soporte de GPS.')},
      {'texto':$sce.trustAsHtml('Tecnologías que Plataforma Ticket MaviGPS usa:'), 
  'imagenes':[
    'technology-icon-1.svg',
    'technology-icon-2.svg',
    'technology-icon-3.svg',
    'technology-icon-4.svg',
    'technology-icon-5.svg',
    'technology-icon-6.svg',
    'technology-icon-7.svg',
    'technology-icon-8.svg',
    'technology-icon-9.svg',
    'technology-icon-10.svg',
    'technology-icon-11.svg',
    'technology-icon-12.svg'
    ]}
    ], 
      'btn_icono':'assets/web/img/plataformas/platform-navegation-icon-9-sindefinir.svg',  
      
      'enlace':'/link_falso'
    },

    {  
      'titulo':'ESTILO DE VIDA', 
      'subtitulo':'BK Agendamiento',   
      'imagenes' :['assets/web/img/plataformas/10.png','assets/web/img/plataformas/5.png','assets/web/img/plataformas/6.png'],
      'descripciones':[
       {'texto':$sce.trustAsHtml('Aplicación móvil desarrollada para Autofin S.A. y soportada para sistemas operativos Android 9.0 en adelante y IOS 12.4 en adelante. BK App fue un proyecto que respondió a la necesidad de tener un equipo de ventas móvil, trabajando en sinergia con  con clientes y los operadores comerciales.')},
      {'texto':$sce.trustAsHtml('Tecnologías que BK Agendamiento usa:'), 
  'imagenes':[
    'technology-icon-1.svg',
    'technology-icon-2.svg',
    'technology-icon-3.svg',
    'technology-icon-4.svg',
    'technology-icon-5.svg',
    'technology-icon-6.svg',
    'technology-icon-7.svg',
    'technology-icon-8.svg',
    'technology-icon-9.svg',
    'technology-icon-10.svg',
    'technology-icon-11.svg',
    'technology-icon-12.svg'
    ]}
    ], 
      'btn_icono':'assets/web/img/plataformas/platform-navegation-icon-9-sindefinir.svg',  
      
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
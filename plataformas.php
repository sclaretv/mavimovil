<svg version="1.1" id="plataformas_top" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 1400 300" style="enable-background:new 0 0 1400 300;" preserveAspectRatio="none" > 
<path class="st0" d="M1402.6,311v-32.8L900,86.7c-181-62.7-263.4-51.1-409.5,0l-490.9,192V311H1402.6z"/>
</svg>

<div class="container">


	<div class="apps-1">
		<div class="row">
			<div class="col-md-6" style="z-index: 1;">
				<div >
					<div class="text-left">
						<img alt="Desarrollo de Apps" src="assets/web/img/IconoPlataforma.svg" height="200" class="efx " data-up="fadeInLeft" data-down="fadeOut ">
					</div>
					<div>
						<h1 class="heading-6 efx" data-up="fadeInLeft" data-down="fadeOut ">Desarrollo de <br>Plataformas</h1>
						<p class="paragraph-7 efx" data-up="fadeInLeft" data-down="fadeOut ">Diseñamos y desarrollamos plataformas digitales, acorde a los objetivos y metas de cada cliente y su respectiva audiencia. No sin antes, definir objetivos y arquetipos de usuarios para enfocar de forma correctas nuestros esfuerzos y la inversión de nuestro cliente.</p>
						<p class="paragraph-7 efx" data-up="fadeInLeft" data-down="fadeOut ">Nos destacamos por ser innovadores y prolijos en términos de códigos, administración y gestión de proyectos digitales.
						</p>
					</div>
				</div>
			</div>

		<div class="col-md-6" style="z-index: -1;">
			<div class="efx" data-up="fadeInRight fast" data-down="fadeOut ">
				<img src="assets/web/img/plataforma-fondo-contenedor-md.svg" class="fondo1 "   alt=""  aria-hidden=true>
				<img src="assets/web/img/fondo-verde.svg" alt=""  class="fondo2 "   aria-hidden=true>
			</div>
			<div class="efx" data-up="rotateInUpRight" data-down="fadeOut ">
				<img src="assets/web/img/img-plataforma.png" alt="" class="fondo3"   aria-hidden=true>
			</div>
			
		</div>

		</div>
		
	</div>

	<div class="section-7" id="plataformas_carousel" >
		<div  ng-controller="slider" ng-init="init(data_p)" class="container position-rlt"  >
	

			<div   ng-repeat="s in data"  ng-show="$index==index_item_selected" class="  animated fadeIn">
				<a href="#" ng-click="anterior_item($index)" class="slider-btn-prev" > 
			    	<img src="assets/web/img/plataformas-izquierda.svg" height="70" alt=""  aria-hidden=true>
			  	</a>

			  	<a href="#" ng-click="siguiente_item($index)" class="slider-btn-next" >
			         <img src="assets/web/img/plataformas-derecha.svg" height="70" alt=""  aria-hidden=true>
			     </a>
				<div class=" ">
					<div class="row">
						<div class="col-md-6 col-md-offset-1">
							<div class="text-center">
 
								<img src="{{imagen_item}}" ng-show="imagen_item" class="animated fadeInLeft"
								 style=" height:260px;   "  alt=""  aria-hidden=true>	 

								<div ng-show="s.imagenes.length>1" > 
									<span ng-repeat="item in s.imagenes"  class="circle_slide {{(item==imagen_item)?'active':''}}" 
									ng-click="set_imagen_item($index)" >   </span>
								</div> 
									
							</div>
							
						</div>
						<div class="col-md-3">
							<div class="animated fadeInRight" style="margin-left: -50px;">
								<h3 class="heading-7">{{s.titulo}}</h3>
								<h1 class="heading-8">{{s.subtitulo}}</h1> 
								<p class="paragraph-8 animated fadeIn " ng-show="desc_item" >{{desc_item}}</p>  
								<a href="" class="button-6" ng-show="s.descripciones.length>1" ng-click="next_desc_item()" ><span>Ver más</span></a> 
							</div>
						</div>
						<div class="col-md-2">
							<div class="animated fadeInRight">
								<div class="buttons-store1" ng-show="s.enlace">
									<a href="{{s.enlace}}" class="button-4"> 
										Ver platafomas
									</a> 
								</div>
								 
							</div>
						</div>
					</div>
				</div> 
			</div> 

			<div  class="slider-icons-plat">
				<ul class="list-inline list-inline-sol text-center">
					<li ng-repeat="s in data" class="list-inline zoom {{($index==index_item_selected)?'active':''}}" title="{{s.subtitulo}}" >
			          <a href="#" ng-click="seleccionar_item($index)">
			            <img src="{{s.btn_icono}}" height="80" alt=""  aria-hidden=true>
			          </a>
			        </li>

			    </ul>
			</div>  
			

		</div> 
	</div> 
</div> 




<svg version="1.1" id="plataformas_bottom" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 1400 300" style="enable-background:new 0 0 1400 300;"  preserveAspectRatio="none" > 
<path class="st0" d="M-0.4-6.1V9.8l511.1,224.6c118.3,68.3,264,68.3,382.3,0l509.7-223.9V-6.1H-0.4z"/>
</svg>

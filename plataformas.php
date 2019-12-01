<svg version="1.1" id="plataformas_top" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 1400 300" style="enable-background:new 0 0 1400 300;" preserveAspectRatio="none" > 
<path class="st0" d="M1402.6,311v-32.8L900,86.7c-181-62.7-263.4-51.1-409.5,0l-490.9,192V311H1402.6z"/>
</svg>

<div class="container">


	<div class="apps-1">
		<div class="row">

			<div class="col-xs-12 hidden-md hidden-lg" style="z-index: -1;  ">
				<div class="efx" data-up="fadeInRight fast" data-down="fadeOut " style="top:0; width: 74%; left: 15%; position: absolute;">
					<img src="assets/web/img/plataforma-fondo-contenedor-md.svg" class="fondo1 "   alt=""  aria-hidden=true>
					<img src="assets/web/img/fondo-verde.svg" alt=""  class="fondo2 "   aria-hidden=true>
				</div>
				<div class="efx" data-up="rotateInUpRight" data-down="fadeOut ">
					<img src="assets/web/img/img-plataforma.png" alt="" class="fondo3"   aria-hidden=true>
				</div>
				
			</div>

			<div class="col-md-6 col-md-offset-0 col-xs-8 col-xs-offset-2" style="z-index: 1;">
				<div >
					<div class="row">
						<div class="col-md-12 col-xs-4">
							<div class="text-left">
								<img class="plat-icon-xs" alt="Desarrollo de Apps" src="assets/web/img/IconoPlataforma.svg" height="200" class="efx " data-up="fadeInLeft" data-down="fadeOut ">
				
							</div>
						</div>
						<div class="col-xs-8 hidden-md hidden-lg">
							<div class="text-left">
								<h1 class="heading-9 efx" style="" data-up="fadeInLeft" data-down="fadeOut ">Desarrollo de <br>Plataformas</h1>
							</div>
						</div>
					</div>
					
					<div>
						<h1 class="heading-6 hidden-sm hidden-xs efx" data-up="fadeInLeft" data-down="fadeOut ">Desarrollo de <br>Plataformas</h1>
						<p class="paragraph-7 efx" data-up="fadeInLeft" data-down="fadeOut ">Diseñamos y desarrollamos plataformas digitales, acorde a los objetivos y metas de cada cliente y su respectiva audiencia. No sin antes, definir objetivos y arquetipos de usuarios para enfocar de forma correctas nuestros esfuerzos y la inversión de nuestro cliente.</p>
						<p class="paragraph-7 efx" data-up="fadeInLeft" data-down="fadeOut ">Nos destacamos por ser innovadores y prolijos en términos de códigos, administración y gestión de proyectos digitales.
						</p>
					</div>
				</div>
			</div>

		<div class="col-md-6 col-md-offset-0 hidden-xs hidden-sm" style="z-index: -1;">
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
				<div class="plataformas-carousel animated fadeInLeft" style="min-height: 577px;">
					<div class="row">
						<div class="col-md-6 col-md-offset-1 col-xs-12">
							<div class="text-center">
 
								<img src="{{imagen_item}}" class="img_carousel_plat img-responsive" ng-show="imagen_item" class="animated fadeInLeft"
								 style=" height:260px;   "  alt=""  aria-hidden=true>	 

								<div ng-show="s.imagenes.length>1" > 
									<span ng-repeat="item in s.imagenes"  class="circle_slide {{(item==imagen_item)?'active':''}}" 
									ng-click="set_timer($index)" >   </span>
								</div> 
									
							</div>
							
						</div>
						<div class="col-md-3 col-md-offset-0  col-xs-6 col-xs-offset-3">
							<div class="plat_carousel_texto animated fadeInRight" >
								<h3 class="heading-7">{{s.titulo}}</h3>
								<h1 class="heading-8">{{s.subtitulo}}</h1> 

								<div class="paragraph-8 animated fadeIn " ng-show="s.texto1" >
									<div ng-bind-html="s.texto1"></div>
								</div>
								<div class="paragraph-8 animated fadeIn " ng-show="s.texto2" >
									<div ng-bind-html="s.texto2"></div>
								</div> 
								<div class="row" ng-show="s.iconos.length>0">
									<div class="col-md-3 col-xs-3 text-center icons-xs" ng-repeat="imag in s.iconos">
										<img alt="" class="icons-vermas animated fadeInRight" src="assets/web/img/{{imag}}"  height="85">
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 col-xs-7 text-left">
										<!--<a href="" class="button-8" ng-show="s.descripciones.length>1" ng-click="next_desc_item()" >
											<span class="hidden-lg hidden-md">Ver más</span>
											
											<img class="hidden-sm hidden-xs" ng-show="d_index==0" src="assets/web/img/platf-derecha-vermas.svg" height="45" alt="Ver más"  aria-hidden=true>

											<img class="hidden-sm hidden-xs" ng-show="d_index==1" src="assets/web/img/platf-izquierda-vermas.svg" height="45" alt="Ver menos"  aria-hidden=true>
										</a>--> 
									</div>
									<div class=" col-md-12 col-xs-5" >
										<!--<a href="{{s.enlace}}" class="hidden-lg hidden-md "> 
											<img class="btn-verplat-xs" src="assets/web/img/link-responsive.svg" height="50" alt=""  aria-hidden=true>
										</a>-->
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-2">
							<div class="animated fadeInRight">
								<!--<div class="buttons-store1" ng-show="s.enlace">
									<a href="{{s.enlace}}" class="button-4"> 
										<img class="btn-verplat-xs" src="assets/web/img/link-responsive.svg" height="40" alt=""  aria-hidden=true>
										Ver plataformas
									</a> 
								</div>-->
								 
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

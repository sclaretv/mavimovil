<div class="container">
	<div class="apps-1">
		<div class="row">
			<div class="col-lg-6" style="z-index: 1;">
				<div >
					<div class="text-left">
						<img alt="Desarrollo de Apps" src="/assets/web/img/IconoPlataforma.svg" height="200" class="efx " data-up="fadeInLeft" data-down="fadeOut ">
					</div>
					<div>
						<h1 class="heading-6 efx" data-up="fadeInLeft" data-down="fadeOut ">Desarrollo de <br>Plataformas</h1>
						<p class="paragraph-7 efx" data-up="fadeInLeft" data-down="fadeOut ">Diseñamos y desarrollamos plataformas digitales, acorde a los objetivos y metas de cada cliente y su respectiva audiencia. No sin antes, definir objetivos y arquetipos de usuarios para enfocar de forma correctas nuestros esfuerzos y la inversión de nuestro cliente.</p>
						<p class="paragraph-7 efx" data-up="fadeInLeft" data-down="fadeOut ">Nos destacamos por ser innovadores y prolijos en términos de códigos, administración y gestión de proyectos digitales.
						</p>
					</div>
				</div>
			</div>

		<div class="col-lg-6" style="z-index: -1;">
			<div >
				<img src="/assets/web/img/plataforma-fondo-contenedor-md.svg" class="fondo1" alt=""  aria-hidden=true>
				<img src="/assets/web/img/fondo-verde.svg" alt=""  class="fondo2" aria-hidden=true>
				<img src="/assets/web/img/img-plataforma.png" alt="" class="fondo3" aria-hidden=true>
			</div>
			
		</div>

		</div>
		
	</div>

	<div class="section-7">
		
		<div class="" id="plataformas_carousel">
			<div   ng-repeat="s in plataformas" ng-show="$index==plataforma_selected" class="plataformas_slide animated fadeIn">
				
			<a  ng-click="anterior_plataforma($index)" class="slider-btn-prev">

			            	<img src="/assets/web/img/plataformas-izquierda.svg" height="70" alt=""  aria-hidden=true>
			          	</a>

			          	<a  ng-click="siguiente_plataforma($index)" class="slider-btn-next">
			            	<img src="/assets/web/img/plataformas-derecha.svg" height="70" alt=""  aria-hidden=true>
			          	</a>
					<div class="plataformas-slide">
						<div class="row">
							<div class="col-md-6">
								<div class="text-center" style="z-index: 5;">
									<img src="/assets/web/img/plataformas/{{$index}}.png" class="animated fadeInLeft" alt=""  aria-hidden=true style="width: 110%; margin-left: 20px;">	
								</div>
								
							</div>
							<div class="col-md-4">
								<div class="animated fadeInRight" style="z-index: 6;">
									<h3 class="heading-7">{{s.titulo}}</h3>
									<h1 class="heading-8">{{s.subtitulo}}</h1>
									<p class="paragraph-8">{{s.descripcion}}</p>
									<a href="{{s.btn_vermas}}" class="button-4"><span>Ver más</span></a>
								</div>
							</div>
							<div class="col-md-2">
								<div class="animated fadeInRight">
									<div class="buttons-store1">
										<a href="{{s.btn_playstore}}" class="button-5">
											<img src="/assets/web/img/GooglePlay.svg" height="30" alt=""  aria-hidden=true></a>
									</div>
									<div class="buttons-store2">
										<a href="{{s.btn_appstore}}" class="button-5">
											<img src="/assets/web/img/AppStore.svg" height="30" alt=""  aria-hidden=true></a>
									</div>
								</div>
							</div>
						</div>
				
			</div>
			</div>
			
			<div >
				<ul class="list-inline list-inline-sol text-center">
					<li ng-repeat="s in plataformas" class="list-inline-plataformas {{($index==plataforma_selected)?'active':''}}" title="{{s.subtitulo}}" >
			          <a  ng-click="seleccionar_plataforma($index)">
			            <img src="/assets/web/img/plataformas/platform-navegation-icon-{{$index}}.svg" height="90" alt=""  aria-hidden=true>
			          </a></li>

			    </ul>
			</div>
		</div>

	</div>

</div> 

 
<svg version="1.1" id="plataformas_top" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 1400 300" style="enable-background:new 0 0 1400 300;" preserveAspectRatio="none" > 
<path class="st0" d="M1402.6,311v-32.8L900,86.7c-181-62.7-263.4-51.1-409.5,0l-490.9,192V311H1402.6z"/>
</svg>


<svg version="1.1" id="plataformas_bottom" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 1400 300" style="enable-background:new 0 0 1400 300;"  preserveAspectRatio="none" > 
<path class="st0" d="M-0.4-6.1V9.8l511.1,224.6c118.3,68.3,264,68.3,382.3,0l509.7-223.9V-6.1H-0.4z"/>
</svg>
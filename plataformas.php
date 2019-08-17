
<div class="" id="plataformas">


		
				
	




	
	<div   ng-repeat="s in plataformas" ng-show="$index==plataforma_selected" class="plataformas_slide animated fadeIn">
		
	<a href="#" ng-click="anterior_plataforma($index)" class="slider-btn-prev">

	            	<img src="assets/web/img/plataformas-izquierda.svg" height="70" alt=""  aria-hidden=true>
	          	</a>

	          	<a href="#" ng-click="siguiente_plataforma($index)" class="slider-btn-next">
	            	<img src="assets/web/img/plataformas-derecha.svg" height="70" alt=""  aria-hidden=true>
	          	</a>
			<div class="plataformas-carousel">
				<div class="row">
					<div class="col-md-6">
						<div class="text-left">
							<img src="assets/web/img/plataformas/{{$index+1}}.png" class="animated fadeInLeft img-responsive" alt=""  aria-hidden=true>	
						</div>
						
					</div>
					<div class="col-md-4">
						<div class="animated fadeInRight">
							<h3 class="heading-7">{{s.titulo}}</h3>
							<h1 class="heading-8">{{s.subtitulo}}</h1>
							<p class="paragraph-8">{{s.descripcion}}</p>
							<a href="{{s.btn_vermas}}" class="button-2"><span>Ver más</span></a>
						</div>
					</div>
					<div class="col-md-2">
						<div class="animated fadeInRight">
							<div class="buttons-store1">
								<a href="{{s.btn_playstore}}" class="button-3">
									<img src="assets/web/img/GooglePlay.svg" height="20" alt=""  aria-hidden=true></a>
							</div>
							<div class="buttons-store2">
								<a href="{{s.btn_appstore}}" class="button-3">
									<img src="assets/web/img/AppStore.svg" height="20" alt=""  aria-hidden=true></a>
							</div>
						</div>
					</div>
				</div>
		
	</div>
	</div>
	

	<div >
		<ul class="list-inline list-inline-sol text-center">
			<li ng-repeat="s in plataformas" class="list-inline-plataformas {{($index==plataforma_selected)?'active':''}}" title="{{s.subtitulo}}" >
	          <a href="#" ng-click="seleccionar_plataforma($index)">
	            <img src="assets/web/img/plataformas/nav{{$index+1}}.svg" height="70" alt=""  aria-hidden=true>
	          </a></li>

	    </ul>
	</div>
			

</div>
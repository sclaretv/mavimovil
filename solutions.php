

<div class="container " id="solutions">
	

	<div   ng-repeat="s in solutions" ng-show="$index==solution_selected" class="solutions_slide animated fadeIn">
<a href="#" ng-click="anterior_solution($index)" class="slider-btn-prev" >

    	<img src="assets/web/img/apps-izquierda.svg" height="70" alt=""  aria-hidden=true>
  	</a>

  	<a href="#" ng-click="siguiente_solution($index)" class="slider-btn-next" >
	            	<img src="assets/web/img/apps-derecha.svg" height="70" alt=""  aria-hidden=true>
	          	</a>
			<div class="solutions-carousel">
				<div class="row">
					<div class="col-md-4 col-md-offset-1">
						<div class="text-right">
							<img src="assets/web/img/solutions/{{$index}}.png" class="animated fadeInLeft" height="400" alt=""  aria-hidden=true>	
						</div>
						
					</div>
					<div class="col-md-5">
						<div class="animated fadeInRight">
							<h3 class="heading-7">{{s.titulo}} {{$index}}</h3>
							<h1 class="heading-8">{{s.subtitulo}}</h1>
							<p class="paragraph-8">{{s.descripcion}}</p>
							<a href="{{s.btn_vermas}}" class="button-2"><span>Ver más</span></a>
						</div>
					</div>
					<div class="col-md-2">
						<div class="animated fadeInRight">
							<div class="buttons-store1">
								<a href="{{s.btn_playstore}}" class="button-3">
									<img src="assets/web/img/GooglePlay.svg" height="30" alt=""  aria-hidden=true></a>
							</div>
							<div class="buttons-store2">
								<a href="{{s.btn_appstore}}" class="button-3">
									<img src="assets/web/img/AppStore.svg" height="30" alt=""  aria-hidden=true></a>
							</div>
						</div>
					</div>
				</div>
			</div>

	</div>
	

	<div >
		<ul class="list-inline list-inline-sol text-center">
			<li ng-repeat="s in solutions" class="list-inline-solutions {{($index==solution_selected)?'active':''}}" title="{{s.subtitulo}}" >
	          <a href="#" ng-click="seleccionar_solution($index)">
	            <img src="assets/web/img/solutions/app-navegation-icon-{{$index}}.svg" height="80" alt=""  aria-hidden=true>
	          </a></li>

	    </ul>
	</div>
			

</div>
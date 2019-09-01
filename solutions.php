 
<div id="solutions_carousel">
	<div  ng-controller="slider" ng-init="init(data_s)" class="container   "  >
		

		<div   ng-repeat="s in data"  ng-show="$index==index_item_selected" class="solutions_slide animated fadeIn">
			<a href="#" ng-click="anterior_item($index)" class="slider-btn-prev" > 
		    	<img src="assets/web/img/apps-izquierda.svg" height="70" alt=""  aria-hidden=true>
		  	</a>

		  	<a href="#" ng-click="siguiente_item($index)" class="slider-btn-next" >
		         <img src="assets/web/img/apps-derecha.svg" height="70" alt=""  aria-hidden=true>
		     </a>
			<div class="solutions-carousel" style="min-height: 415px;">
				<div class="row">
					<div class="col-md-3 col-md-offset-2 col-xs-10 col-xs-offset-1">
						<div class="text-center">
							<img src="{{imagen_item}}" ng-show="imagen_item" class="img-carousel-sol img-responsive animated fadeInLeft"  alt=""  aria-hidden=true>	


							<div ng-show="s.imagenes.length>1" > 
								<span ng-repeat="item in s.imagenes"  class="circle_slide {{(item==imagen_item)?'active':''}}" 
								ng-click="set_imagen_item($index)" >   </span>
							</div> 
								
						</div>
						
					</div>
					<div class="col-md-5 col-md-offset-0  col-xs-6 col-xs-offset-3">
						<div class="sol_carousel_texto animated fadeInRight">
							<h3 class="heading-7">{{s.titulo}}</h3>
							<h1 class="heading-8">{{s.subtitulo}}</h1>

							<div class="paragraph-8 animated fadeIn " ng-show="desc_item.texto" ><div ng-bind-html="desc_item.texto"></div>
							

							</div>  
							<div class="row" ng-show="desc_item.imagenes.length>0">
								<div class="col-md-3 col-xs-3" ng-repeat="imag in desc_item.imagenes">
									<img alt="" class="animated fadeInRight" src="assets/web/img/{{imag}}"  height="55">
								</div>
							</div>

							<div class="row">
								<div class="col-md-12 col-xs-6 text-right">
									<a href="" class="button-2" ng-show="s.descripciones.length>1" ng-click="next_desc_item()" >
										<span class="hidden-lg hidden-md">Ver más</span>
										<img class="hidden-sm hidden-xs" src="assets/web/img/apps-derecha-vermas.svg" height="30" alt=""  aria-hidden=true>
									</a>
								</div>
								<div class="col-xs-2 text-left">
									<a href="{{s.playstore}}" class="button-7 hidden-sm hidden-xs">
										<img src="assets/web/img/GooglePlay.svg" height="30" alt=""  aria-hidden=true>
									</a>

									<a href="{{s.playstore}}" class="hidden-lg hidden-md" >
										<img src="assets/web/img/googlplay-responsive.svg" height="50" alt=""  aria-hidden=true>
									</a>
								</div>
								<div class="col-xs-4 text-left">
									<a href="{{s.appstore}}" class="button-7 hidden-sm hidden-xs"><img src="assets/web/img/AppStore.svg" height="30" alt=""  aria-hidden=true></a>

									<a href="{{s.appstore}}" class="hidden-lg hidden-md" >
										<img src="assets/web/img/appstore-responsive.svg" height="50" alt=""  aria-hidden=true>
									</a>
								</div>
								<div class="col-xs-2"></div>
								
							</div>
							
						</div>
					</div>
					<div class="col-md-2">
						<div class="animated fadeInRight">
							<div class="buttons-store3" ng-show="s.playstore">
								<a href="{{s.playstore}}" class="button-3">
									<img src="assets/web/img/GooglePlay.svg" height="30" alt=""  aria-hidden=true></a>
							</div>
							<div class="buttons-store4" ng-show="s.appstore">
								<a href="{{s.appstore}}" class="button-3">
									<img src="assets/web/img/AppStore.svg" height="30" alt=""  aria-hidden=true></a>
							</div>
						</div>
					</div>
				</div>
			</div> 
		</div> 

		<div  class="slider-icons">
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



<div class="container " id="solutions" ng-controller="slider"  >
	

	<div   ng-repeat="s in data"  ng-show="$index==index_item_selected" class="solutions_slide animated fadeIn">
<a href="#" ng-click="anterior_item($index)" class="slider-btn-prev-solutions" >

    	<img src="assets/web/img/apps-izquierda.svg" height="70" alt=""  aria-hidden=true>
  	</a>

  	<a href="#" ng-click="siguiente_item($index)" class="slider-btn-next-solutions" >
	            	<img src="assets/web/img/apps-derecha.svg" height="70" alt=""  aria-hidden=true>
	          	</a>
			<div class="solutions-carousel">
				<div class="row">
					<div class="col-md-3 col-md-offset-2">
						<div class="text-center">
							<img src="{{imagen_item}}" ng-show="imagen_item" class="animated fadeInLeft" height="340" style=" margin-top: -20px; margin-right: -30px;" alt=""  aria-hidden=true>	
 

							<div ng-show="s.imagenes.length>1" > 
								<span ng-repeat="item in s.imagenes"  class="circle_slide {{(item==imagen_item)?'active':''}}" 
								ng-click="set_imagen_item($index)" >   </span>
							</div> 
								
						</div>
						
					</div>
					<div class="col-md-5">
						<div class="animated fadeInRight" style="margin-right: 70px;">
							<h3 class="heading-7">{{s.titulo}}</h3>
							<h1 class="heading-8">{{s.subtitulo}}</h1>

							<p class="paragraph-8 animated fadeIn " ng-show="desc_item" >{{desc_item}}</p> 

							<a href="" class="button-2" ng-click="next_desc_item()" ><span>Ver más</span></a>


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
	

	<div >
		<ul class="list-inline list-inline-sol text-center">
			<li ng-repeat="s in data" class="list-inline-solutions zoom {{($index==index_item_selected)?'active':''}}" title="{{s.subtitulo}}" >
	          <a href="#" ng-click="seleccionar_item($index)">
	            <img src="{{s.btn_icono}}" height="80" alt=""  aria-hidden=true>
	          </a></li>

	    </ul>
	</div>
			

</div>
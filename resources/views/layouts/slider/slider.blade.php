<div  class="carousel slide" id="Slider" id="imageSlider" data-ride="carousel">        
	<ol class="carousel-indicators">
		<li data-target="#Slider" data-slide-to="0" class="active"></li>
		<li data-target="#Slider" data-slide-to="1"></li>
		<li data-target="#Slider" data-slide-to="2"></li>
	</ol>
	<div class="app-contenedor-slider  carousel-inner">
		<div class="app-contenedor-slider item active">
			<img class="img-rounded" id="imagenSlider" src="{{ asset('plugins/bootstrap/img/slider1.jpg') }}" alt="imagenes">
			<div class="carousel-caption"><h1> Bienvenido a OneSystem!!</h1><h3>gracias por preferirnos</h3></div>
		</div>
		<div class="app-contenedor-slider item"> 
			<img class="img-rounded" id="imagenSlider" src="{{ asset('plugins/bootstrap/img/slider2.jpg') }}" alt="imagenes">
		</div>
		<div class="app-contenedor-slider item">
			<img class="img-rounded" id="imagenSlider" src="{{ asset('plugins/bootstrap/img/slider3.jpg') }}" alt="imagenes">
		</div>
	</div>
	<div >
		<a href="#Slider" class="carousel-control left  " data-slide="prev" ><span  class="fa fa-chevron-left"></span></a>
		<a href="#Slider" class="carousel-control right " data-slide="next" ><span  class="fa fa-chevron-right"></span></a>
	</div>
</div>




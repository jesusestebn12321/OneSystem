
@for($m=0;$m<3;$m++)
<?php  
$a = rand(0, sizeof($producto)-1); 
?>
<div class="col-xs-12 col-md-4" id="imagen1">
	<div class="thumbnail " id="app-cajaP">
		<div><span class="app-stock">Stock:{{$producto[$a]->productoImagen->producto->stoc}}</span></div>  
		<div class="carousel slide app-div-img " id="{{$producto[$a]->productoImagen->producto->id}}" data-ride="carousel">
			
			<ol class="carousel-indicators">
				<li data-target="#{{$producto[$a]->productoImagen->producto->id}}" data-slide-to="0" class="active"></li>
				@for($j=1; $j<sizeof($producto[$a]->productoImagen->producto->productoImagen);$j++)
				<li data-target="#{{$producto[$a]->productoImagen->producto->id}}" data-slide-to="{{$j}}"></li>
				@endfor
			</ol>
			
			<div class="carousel-inner ">
				<div class="item active  app-div-img">
					<img class="img-responsive img-rounded" id="productos" src="{{asset('uploads/imagenes/productos/'.$producto[$a]->productoImagen->imagen->imagen)}}" alt="Producto">
				</div>
				@for($j=1; $j<sizeof($producto[$a]->productoImagen->producto->productoImagen);$j++)
				<div class="item app-div-img"> 
					<img class="img-responsive img-rounded" id="productos" src="{{asset('uploads/imagenes/productos/'.$producto[$a]->productoImagen->producto->productoImagen[$j]->imagen->imagen)}}" alt="Producto">
				</div>
				@endfor
			</div>
			<a href="#{{$producto[$a]->productoImagen->producto->id}}" class="carousel-control left" data-slide="prev"><i style="font-size: 30px;" class="fa fa-chevron-circle-left "></i></a>
			<a href="#{{$producto[$a]->productoImagen->producto->id}}" class="carousel-control right" data-slide="next"><i style="font-size: 30px;" class="fa fa-chevron-circle-right "></i></a>
		</div>
		<div class="caption">
			<span class="app-titulo-precioN">{{$producto[$a]->productoImagen->producto->nombre}}</span>
			<p class="app-contenido-precio">
				<br>Descripcion: <span class="app-resaltar">{{$producto[$a]->productoImagen->producto->descripcion}}</span>
				<br>Publicado: <span class="app-resaltar">{{$producto[$a]->productoImagen->producto->created_at}}</span>
				<br>Categoria: <span class="app-resaltar">{{$producto[$a]->productoImagen->producto->categoria->nombre}}</span>
				<br>Precio: <span class="app-resaltar">{{$producto[$a]->productoImagen->producto->precio}}$</span>
			</p>
			@if (!Auth::guest() && Auth::user()->rol!=0)
			<a href="{{route( 'manageProducto-show' , $producto[$a]->id )}}" class='btn btn-info btn-block'>  Ver</a>
			@endif

		</div>
	</div>
</div>
@endfor

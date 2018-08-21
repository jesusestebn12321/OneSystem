@extends('layouts.app2')
@section('script')
<script>
	$('#pausar').on('click', function(){
		var valor= $('#pausar').val();
	swal("Articulo Pausado!", "Su articulo se pauso exitosamente!"+ valor, "success")
	});
</script>
@endsection
@section('content')
<div class="row"> 
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="box">
			<div class="col-md-7">
				<div class="x_title">
					<h2><i class="fa fa-inbox"></i> Mis Productos</h2>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="container-fluid">

				<div style="margin-top: 10px;" class=" row text-center">
					<div class="col-md-2">
						<a href="{{route('manageProducto-create')}}
						"  class="btn btn-warning">
						<i class="fa fa-shopping-bag"></i> Vender un Articulo
					</a>
				</div>
			</div>
		</div>

		<div class="container text-center">

			<div class="page">
				<div class="">
					@if(Session::has('message'))
					<div class='alert alert-success'>
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<p>{{ Session::get('message') }}</p>
					</div>
					@endif
				</div>
				<div class="x">
					@if(Session::has('message2'))
					<div class='alert alert-danger'>
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<p>{!! Session::get('message2') !!}</p>
					</div>
					@endif
				</div>
				@if(count($producto)>0 )  
				<div class="">
					<?php $i=0; ?>
					@foreach($producto as $productos)    
					@if($productos->act == 1)
					@if($productos->user_id == Auth::user()->id)
					<?php $i++; ?>
					<div class="col-xs-12 col-sm-3 app-letra " id="imagen2">
						<div class="thumbnail">
							<div class="carousel slide thumbnail carritoRadius" id="miSlider1" data-ride="carousel">
								<div class="carousel-inner">
									<div class="item active app-div-img"  style="border-radius: 100%; border:0px;">
										<img class="img-responsive img-rounded"  style="border-radius: 100%; border:0px;" id="carrito" src="{{asset('uploads/imagenes/productos/imagen_1.jpg')}}" alt="Producto">
									</div>
									@for($j=1; $j<sizeof($productos->productoImagen->producto->productoImagen);$j++)
									<div class="item app-div-img" style="border-radius: 100%; border:0px;">
										<img class="img-responsive img-rounded" style="border-radius: 100%;" id="carrito" src="{{asset('uploads/imagenes/productos/'.$productos->productoImagen->producto->productoImagen[$j]->imagen->imagen)}}" alt="Producto">
									</div>
									@endfor
								</div>
							</div>
							<div class="caption">
								<h4 id="h4titulo">{{$productos->productoImagen->producto->nombre}}</h4>
								<p id="letraP">
									<br>Descripcion: <span class="app-resaltar3">{{$productos->productoImagen->producto->descripcion}}</span>
									<br>Categoria: <span class="app-resaltar3">{{$productos->productoImagen->producto->categoria->nombre}}</span>
									<br>Precio: <span class="app-resaltar3">{{$productos->productoImagen->producto->precio}}</span></p>
									<div class="row">
										<div class="col-lg-6">
											<a href="{{route('manageProducto-edit', $productos->id)}}" class="btn btn-danger btn-block" data-toggle="tooltip" data-placement="left" title="Editar"><i class="fa fa-edit"></i></a>
										</div>
										<div class="col-lg-6">
											<a href="{{route('manageProducto-destroy', $productos->id)}}" id="borrar" class="btn btn-danger btn-block" data-toggle="tooltip" data-placement="left" title="Eliminar"><i class="fa fa-trash"></i></a>
										</div>
										
									</div>
									<div class="row" style="margin-top: 2px;">
										<div class="col-lg-6">
											<a href="{{route('manageArticulo-pausar', $productos->id)}}" value='{{$productos->productoImagen->producto->nombre}}' id="pausar"  class="btn btn-danger btn-block" data-toggle="tooltip" data-placement="left" title="Pausar"><i class="fa fa-pause"></i></a>
										</div>
										<div class="col-lg-6">
											<a href="{{route('manageProducto-show', $productos->id)}}" class="btn btn-danger btn-block" data-toggle="tooltip" data-placement="left" title="Ver"><i class="fa fa-eye"></i></a>
										</div>
										
									</div>
								</div>
							</div>
						</div>
						@endif
						@endif
						@endforeach
				</div>
				@if($i==0)
				<div class="alert alert-block alert-info" style="margin-top: 44px;">
					<i class="fa fa-exclamation-triangle fa-1" style="float:left; margin-right: 16px;"></i>
					<p class="margin-bottom-10">
						No existen Productos Activos.
					</p>
				</div>
				@endif
				@else()
				<div class="alert alert-block alert-info" style="margin-top: 44px;">
					<i class="fa fa-exclamation-triangle fa-1" style="float:left; margin-right: 16px;"></i>
					<p class="margin-bottom-10">
						No existen items registrados en el sistema.
					</p>
				</div>
				@endif
			</div>
		</div>
	</div>
</div>
</div>



@endsection
@extends('layouts.app2')
@section('content')
@for($p=0;$p<sizeof($carrito);$p++)
@endfor
<div class="row">	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="box box-danger">
			<div class="col-md-7">
				<div class="x_title">
					<h2><i class="fa fa-shopping-cart"></i> Carrito <span class="badge">{{$p}}</span></h2>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="container-fluid">
				<div style="margin-top: 10px;" class=" row text-center">		
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
				@if(count($carrito)>0 )  
                    <div class="app-formulario2">
                        <div class="container-fluid">
                            <div class="row ">
								<?php $i=0 ?>
								@foreach($carrito as $carritos)    
									@if($carritos->productoUser->act == 2)
										<?php $i++; ?>
                				        <div class="col-xs-12 col-sm-3 app-letra " id="imagen2">
                                  			<div class="thumbnail">
                                    			<div class="carousel slide thumbnail carritoRadius" id="miSlider1" data-ride="carousel">
                                        			<div class="carousel-inner">
                                        				<div class="item active app-div-img"  style="border-radius: 100%; border:0px;">
                                        					<img class="img-responsive img-rounded"  style="border-radius: 100%; border:0px;" id="carrito" src="{{asset('uploads/imagenes/productos/imagen_1.jpg')}}" alt="Producto">
                                        				</div>
                                        				@for($j=1; $j<sizeof($carritos->productoUser->productoImagen->producto->productoImagen);$j++)
                                        				<div class="item app-div-img" style="border-radius: 100%; border:0px;">
                                        					<img class="img-responsive img-rounded" style="border-radius: 100%;" id="carrito" src="{{asset('uploads/imagenes/productos/'.$carritos->productoUser->productoImagen->producto->productoImagen[$j]->imagen->imagen)}}" alt="Producto">
                                        				</div>
                                        				@endfor
                                        			</div>
                                    			</div>
                                    			<div class="caption">
                                      				<h4 id="h4titulo">{{$carritos->productoUser->productoImagen->producto->nombre}}</h4>
                                      				<p id="letraP">
                                      				<br>Descripcion: <span class="app-resaltar3">{{$carritos->productoUser->productoImagen->producto->descripcion}}</span>
                                      				<br>Categoria: <span class="app-resaltar3">{{$carritos->productoUser->productoImagen->producto->categoria->nombre}}</span>
                                      				<br>Precio: <span class="app-resaltar3">{{$carritos->productoUser->productoImagen->producto->precio}}</span></p>
                                    			</div>
                                  			</div>
                				        </div>
									@endif
								@endforeach
                            </div>
                        </div>
                    </div>

                
					@if($i==0)
						<div class="alert alert-block alert-info" style="margin-top: 44px;">
							<i class="fa fa-exclamation-triangle fa-1" style="float:left; margin-right: 16px;"></i>
							<p class="margin-bottom-10">
								¡¡ Hola {{Auth::user()->name}} !! aun no existen Productos Comprados.
							</p>
						</div>
					@endif
				@else()
				<div class="alert alert-block alert-info" style="margin-top: 44px;">
					<i class="fa fa-exclamation-triangle fa-1" style="float:left; margin-right: 16px;"></i>
					<p class="margin-bottom-10">
						¡¡ Hola {{Auth::user()->name}} !! aun no existen Productos Comprados.
					</p>
				</div>
				@endif
			</div>
		</div>
	</div>
</div>
</div>
@endsection
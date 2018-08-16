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
						<p>{!! Session::get('message') !!}</p>
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
				<div class="table-responsive">
					<table  class=" table table-striped table-hover">
						<thead>
							<tr>
								<th class="col-md-2">Nombre</th>
								<th class="col-md-2">Categoria</th>
								<th class="col-md-2">Decripcion</th>
								<th class="col-md-2">Stock</th>
								<th class="col-md-2">Precio</th>
								<th class="col-md-2">Fecha de Creacion</th>
								<th class="col-md-2">Status</th>
								<th class="col-md-2"></th>
							</tr>
						</thead>
						<tbody>
							<?php $i=0 ?>
							@foreach($producto as $productos)    
							@if($productos->act == 1)
							@if($productos->user_id == Auth::user()->id)
							<?php $i++; ?>	
							<tr>
								<td>{{$productos->productoImagen->producto->nombre}}</td>
								<td>{{$productos->productoImagen->producto->categoria->nombre}}</td>
								<td>{{$productos->productoImagen->producto->descripcion}}</td>
								<td>{{$productos->productoImagen->producto->stock}}</td>
								<td>{{$productos->productoImagen->producto->precio}}</td>
								<td>{{$productos->productoImagen->producto->created_at}}</td>
								<td>@if($productos->act==1) <i class="badge">Activo</i>@endif</td>
								<td>
									<div class="row">
									<div class="col-md-6 col-xs-6">
										<a href="{{route('manageProducto-edit', $productos->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="left" title="Editar"><i class="fa fa-edit"></i></a>
										<a href="{{route('manageProducto-destroy', $productos->id)}}" id="borrar" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="left" title="Eliminar"><i class="fa fa-trash"></i></a>
									</div>
										
									</div>
									<div class="row">
									<div class="col-md-6 col-xs-6">
										<a href="{{route('manageArticulo-pausar', $productos->id)}}" value='{{$productos->productoImagen->producto->nombre}}' id="pausar"  class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="left" title="Pausar"><i class="fa fa-pause"></i></a>



										<a href="{{route('manageProducto-show', $productos->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="left" title="Ver"><i class="fa fa-eye"></i></a>
									</div>
										
									</div>

								</td>
							</tr>
							@endif	
							@endif
							@endforeach
						</tbody>
					</table>
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
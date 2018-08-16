@extends('layouts.app2')
@section('script')
<script>
	$(function () {
		$('#tabla').DataTable({
			"paging": true,
			"lengthChange": false,
			"searching": false,
			"ordering": true,
			"info": true,
			"autoWidth": false
		});
	});
</script>
@endsection
@section('content')
<div class="row"> 
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="box">
			<div class="col-md-7">
				<div class="x_title">
					<h2><i class="fa fa-user "></i> Usuarios De OneSystem</h2>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="container-fluid">
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
				@if(count(Auth::user())>0 )  
				<div class="table-responsive">
					<table id="tabla"  class="table table-striped table-hover">
						<thead>
							<tr>
								<th class="col-md-2"></th>
								<th class="col-md-2">Nombre</th>
								<th class="col-md-2">E-mail</th>
								<th class="col-md-2">Rol</th>
								<th class="col-md-2">Status</th>
								<th class="col-md-2">Creado</th>
								<th class="col-md-2"></th>
							</tr>
						</thead>
						<tbody>
							<?php $i=0 ?>
							@foreach($user as $users)    
							@if($users->status == 1)
							@if($users->id != Auth::user()->id)
							<?php $i++; ?>	
							<tr>
								<td>{{$users->imagen}}</td>
								<td>{{$users->name}}</td>
								<td>{{$users->email}}</td>
								<td>{{$users->rol}}</td>
								<td>@if($users->status==1) <i class="badge">Activo</i>@endif</td>
								<td>{{$users->created_at}}</td>
								<td>
									<div class="row">
									<div class="col-md-6 col-xs-6">
										<a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="left" title="Editar"><i class="fa fa-edit"></i></a>
										<a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="left" title="Eliminar"><i class="fa fa-trash"></i></a>
									</div>
										
									</div>
									<div class="row">
									<div class="col-md-6 col-xs-6">
										<a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="left" title="Pausar"><i class="fa fa-pause"></i></a>
										<a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="left" title="Ver"><i class="fa fa-eye"></i></a>
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
						No existen Usuarios Activos.
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
@extends('layouts.app2')

@section('script')
<script>
	$(document).ready(function(){
		$(".create").click(function(){
           $(".modalCreate").fadeIn();
       });
        $(".cerrarCreate").click(function(){

            $(".modalCreate").fadeOut(300);
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
					<h2><i class="fa fa-list-alt"></i> Mis Categorias</h2>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="container-fluid">

				<div style="margin-top: 10px;" class=" row text-center">
					<div class="col-md-2">
						<a href="#" class="btn btn-warning create">
						<i class="fa fa-list-alt"></i> Crear Categorias
					</a>
				</div>
			</div>
		</div>

		<div class="container text-center">

			<div class="page">
				<div class="table-responsive">
					<table id="tabla"  class="table table-striped table-hover">
						<thead>
							<tr>
								<th class="col-md-2">Categoria</th>
								<th class="col-md-2">Icono</th>
								<th class="col-md-2">Color</th>
								<th class="col-md-2"></th>
							</tr>
						</thead>
						<tbody>
							@foreach($categoria as $categorias)
							<tr>
								<td>{{$categorias->nombre}}</td>
								<td><i class="fa {{$categorias->icono}}"></i></td>
								<td> <div class=" {{$categorias->color}}"> Color </div> </td>
								<td>
									<div class="col-md-6 col-xs-6">
										<a href="{{route('manageCategoria-A-edit', $categorias->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="left" title="Editar"><i class="fa fa-edit"></i></a>
										<a href="{{route('manageCategoria-A-destroy', $categorias->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="right" title="Eliminar"><i class="fa fa-trash"></i></a>
									</div>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
				
			</div>
		</div>
	</div>
</div>
</div>

<!----------------------------------------------- modal create  --------------------------------------->
<div class="modal modalCreate" style="overflow-y: auto;">
	<div class="modal-dialog">
    	<div class="modal-content">
	    	<div class="modal-header ">
	    		<button class="close cerrarCreate" >&times;</button>
	            <h3>CREAR CATEGORIA</h3>
	    	</div>
	        <div class="modal-body">
	        	<form action="{{route('manageCategoria-A-store')}}" method="post">
	        		{{ csrf_field() }}
	        	<div class="form-group">
	        		<label for="nombre">Categoria</label>
	        		<input type="text" class="form-control" placeholder="Nombre"  name="nombre" required>
	        	</div>
	        	<div class="form-group">
	        		<label for="nombre">Icono</label>
	        		<div class="container-fluid box box-info">
	        			<div class="row" style="font-size: 20px;">
			        		<div class="row">
			        			<div class="col-lg-3">
			        				<input type="radio" name="icono" value ="fa-car"><i class=" fa fa-car"></i> 		
			        			</div>
			        			<div class="col-lg-3">
			        				<input type="radio" name="icono" value ="fa-home"><i class="fa fa-home"></i>
			        			</div>
			        			<div class="col-lg-3">
			        				<input type="radio" name="icono" value ="fa-phone"><i class="fa fa-phone"></i>
			        			</div>
			        			<div class="col-lg-3">
			        				<input type="radio" name="icono" value ="fa-tv"><i class="fa fa-tv"></i>
			        			</div>
			        		</div>
			        		<div class="row">
			        			<div class="col-lg-3">
			        				<input type="radio" name="icono" value ="fa-motorcycle"><i class="fa fa-motorcycle"></i>   
			        			</div>
			        			<div class="col-lg-3">
			        				<input type="radio" name="icono" value ="fa-suitcase"><i class="fa fa-suitcase"></i> 	 
			        			</div>
			        			<div class="col-lg-3">
			        				<input type="radio" name="icono" value ="fa-soccer-ball-o"><i class="fa fa-soccer-ball-o"></i>
			        			</div>
			        			<div class="col-lg-3">
			        				<input type="radio" name="icono" value ="fa-paw"><i class="fa fa-paw"></i> 		 
			        			</div>
			        		</div>
			        		<div class="row">
			        			<div class="col-lg-3">	        			
			        				<input type="radio" name="icono" value ="fa-female"><i class="fa fa-female"></i> 		 
			        			</div>
			        			<div class="col-lg-3">	        			
			        				<input type="radio" name="icono" value ="fa-male"><i class="fa fa-male"></i> 		 
			        			</div>
			        			<div class="col-lg-3">	        			
			        				<input type="radio" name="icono" value ="fa-music"><i class="fa fa-music"></i> 		 
			        			</div>
			        			<div class="col-lg-3">	        			
			        				<input type="radio" name="icono" value ="fa-wrench"><i class="fa fa-wrench"></i> 		 
			        			</div>
			        		</div>
	        			</div>
	        		</div>
	        		
	        	</div>
	        	<div class="form-group">
	        		<label for="nombre">Color</label>
	        		<select name="color" class="form-control">
						<option value ="bg-gray">Seleciona Un Color</option>
						<option value ="bg-gray"   class="bg-gray"   >Gris</option>
						<option value ="bg-aqua"   class="bg-aqua"   >Azul</option>
						<option value ="bg-navy"   class="bg-navy"   >Azul Oscuro</option>
						<option value ="bg-teal"   class="bg-teal"   >Verde Agua</option>
						<option value ="bg-purple" class="bg-purple" >Pulpura</option>
						<option value ="bg-orange" class="bg-orange" >Naranja</option>
						<option value ="bg-maroon" class="btn bg-maroon btn-flat margin" >Morado</option>
						<option value ="bg-lime"   class="bg-lime"   >Lima</option>
	        		</select>
	        		
	        	</div>       
			</div>
			<div class="modal-footer">
				<button  class="btn btn-warning" data-dismiss="modal">Crear</button>
			</div>
		</form>
		</div>
	</div>
</div>

@endsection
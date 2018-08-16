@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">

		<form class="form-horizontal" method="POST" action="{{ route('manageProducto-update', $producto->id) }}">
			{!!csrf_field()!!}

			<label class ="form-control" for="">nombre</label><input name="nombre" class="form-control" type="text">
			<br><label class ="form-control" for="">descripcion </label><input name="descripcion" class="form-control" type="text">  
			<br><select name="categoria" class="form-control">
				<option value="">
					Categoria
				</option>
				@foreach($categoria as $categorias)
				<option  value="{{$categorias->id}}">
					{{$categorias->nombre}}
				</option>
				@endforeach
			</select>    

			<br><label class ="form-control" for="">stock </label>		<input name="stock" class="form-control" type="number">                       
			<br><label class ="form-control" for="">precio </label>		<input name="precio" class="form-control" type="number">	
			<button class    ="btn btn-primary">vender</button>

		</form>
		
	</div>
</div>

@endsection
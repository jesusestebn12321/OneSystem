@extends('layouts.app')

@section('script')
<script>
	$(document).ready(function() {
$(".add-imagen").click(function(e){
            e.preventDefault();
            var imagen= $("#imagenes").val();
            var unidad =1;
            var suma = (parseInt(imagen)+parseInt(unidad));
            $.each(document.querySelectorAll("#data tbody"), function (index, val) {
                $(val).append("<tr>" +
                    "<td><input type='file' name='imagenes"+suma+"' value='' class='form-control' required ></td>" +
                    "<td><button type='button' class='btn btn-danger button_eliminar_producto'> <i class='fa fa-remove'></i> </button></td></tr>");
            });
            $("#imagenes").val(suma);

        });

        $('#data').on('click', '.button_eliminar_producto', function(){
            var imagen = $("#imagenes").val();
            var resta = eval(imagen - 1);
            if (resta < 0){
                $("#imagenes").val(0);
            }else{
                $("#imagenes").val(resta);
            }
            $(this).parents('tr').eq(0).remove();
        });
    });
</script>
@endsection

@section('content')
<div class="row">
	<div class="container">
		<div class="box box-info">
			<div class="box-header with-border">
				<h2 class="box-title">¡VENDELO YA!</h2>
			</div>
			<form action="{{route('manageProducto-store')}}" enctype="multipart/form-data" class="form-group">
				{{ csrf_field() }}
				<input id="user_id" type="hidden" name="user_id" value="{{Auth::user()->id}}" required>
				<input id="act" type="hidden" name="act" value="1" required>
				<div class="box-body">
					<div class="form-group">
						<h4>Nombre de tu Producto</h4>
						<input name="nombre" class="form-control" placeholder="Ej.: Corsa" type="text" required>  
					</div>
					<div class="form-group">
						<h4>Categoria</h4>
						<select name="categoria" class="form-control">
							<option value="">Categoria</option>
							@foreach($categoria as $categorias)
							<option  value="{{$categorias->id}}">{{$categorias->nombre}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<h4>Selecionar Imagenes Para Tu Producto</h4>


						<input type="hidden" name="imagenes" id="imagenes" value="0" class="form-control" readonly required >
						<a class="btn btn-success btn-success add-imagen pull-right" data-placement="bottom" data-toggle='tooltip' title="Mas Imagenes" href="">Add imagen</a>
					</div>
					<div class="col-md-5"></div>
					<div class="clearfix"></div>
					<div>
						<table class="table table-responsive table-condensed" id="data" name="data">
							<thead>
								<tr>
									<th class="col-md-2"></th>
									<th class="col-md-2"></th>
								</tr>
							</thead>
							<tbody>
							</tbody>
						</table>
					</div>

					</div>
					<div class="form-group">
						<h4>Descripcion</h4>
						<textarea class="form-control" name="descripcion" rows="3" placeholder="Descripcion..." required></textarea>
					</div>
					<div class="form-group">
						<h4>Stock</h4>
						<input name="stock" class="form-control" placeholder="Cantidad de productos..." type="number" required>  
					</div>
					<div class="form-group">
						<h4>Precio</h4>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-dollar"></i></span>
							<input name="precio" class="form-control" type="number">
							<span class="input-group-addon">.00</span>	
						</div>  
					</div>
					<div class="box-footer">

						<button type="submit" class="btn btn-info pull-right">Vender</button>
					</div>
				</form>
			</div>
		</div>
	</form>
</div>
</div>
@endsection

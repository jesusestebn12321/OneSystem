<div class="input-group margin"  style="width:500px;height:50px;" >
	<span class="input-group-btn"> 
		<button id="categoria" class="dropdown-toggle btn btn-flat text-gray" style="height:100%;border-right:2px solid #cccc ;border-radius:4px 0px 0px 4px;background:white;" >Todas las Categorias...<i class="fa fa-chevron-down"></i></button>
	</span>
	<input type="text" class="form-control" style="border:none;width:300px;border-bottom:0px;height:100% " placeholder="Producto..." >
	<span class="input-group-btn">
		<button type="button" class="btn btn-warning btn-flat waves-effect" style="width:60px;height:100%;border-radius:0px 4px 4px 0px;"><i class="fa fa-search"></i></button>
	</span>
</div>
<ul class="dropdown-menu mega-dropdown-categoria row" style="outline: none;border-radius: 10px ;top:60px;">
	@foreach($categoria as $categorias)
		<li class="text-black" style="font-size: 15px;padding: 10px; text-align: center">
			<div class="col-xs-3">
				<i  class="fa {{$categorias->icono}}"></i>
			</div>
			<div class="col-xs-3">
				<span>{{$categorias->nombre}}</span>
			</div>
			
			
		   </li>
	@endforeach
</ul>
<a style="color: white;" href="#" class="dropdown-toggle" data-toggle="dropdown">
	<img src="{{asset('uploads/usuarios/'.Auth::user()->imagen)}}" class="user-image" alt="{{Auth::user()->imagen}}">
	{{ Auth::user()->name }} <span class="caret"></span>
</a>
<ul class="dropdown-menu">
	<li class="user-header app-user-header">
		<img src="{{asset('uploads/usuarios/'.Auth::user()->imagen)}}" class="img-circle" alt="{{Auth::user()->imagen}}">
		<p>{{ Auth::user()->name }}</p>
	</li>
	<li class="user-body">
		<div class="row">
			<div class="col-xs-4 text-center">
				
			</div>
			<div class="col-xs-4 text-center">
				@if(Auth::user()->rol==1)
        			<a href="{{route('manageProducto-create')}}">Vender</a>
      			@endif
			</div>
			<div class="col-xs-4 text-center">
				
			</div>
		</div>
	</li>
	<li class="user-footer">
		<div class="pull-left">
			<a href="#" class="btn btn-primary btn-flat">Configuracion</a>
		</div>
		<div class="pull-right">
			<a class="btn btn-info btn-flat" href="{{ route('logout') }}"
				onclick="event.preventDefault();
				document.getElementById('logout-form').submit();">
				Logout
			</a>
			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
				{{ csrf_field() }}
			</form>
		</div>
	</li>
</ul> 
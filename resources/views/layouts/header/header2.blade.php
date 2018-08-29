<nav class="navbar navbar-static-top app-nav" style="margin-bottom: 20px;">
	<a href="#" id="btnSidebar" class="sidebar-toggle" data-toggle="offcanvas" role="button" style="text-decoration: none;" >
		<span class="sr-only">Toggle navigation</span>
	</a>
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand text-white" id="app-titulo-central" href="{{ url('/home') }}">
				{{ config('app.name', 'OneSystem') }}
			</a>
		</div>
		<div class="collapse navbar-collapse" id="app-navbar-collapse">
			<ul class="nav navbar-nav">
				&nbsp;
			</ul>
			<ul class="nav navbar-nav navbar-right">

				@if(Auth::user()->rol==1)
				<li>
					<ul class="nav navbar-nav navbar-right">
						<li id="categoria-menu" class="dropdown mega-dropdown " >
							@include('layouts.decoraciones.barraBuscar')
							@include('layouts.decoraciones.lista-menu-abajo')
						</li>
					</ul>
				</li>

				<li>
					<a class="text-white input-buscar" id="btn-corazon" style="color: white" href="#"><i id="corazon" class="fa fa-heart "></i></a>
				</li>
					
				<li class="dropdown messages-menu">
					@include('layouts.decoraciones.menu')
				</li> 
				@endif
				<li>
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown mega-dropdown user user-menu">
							@include('layouts.decoraciones.menuUser2')
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>

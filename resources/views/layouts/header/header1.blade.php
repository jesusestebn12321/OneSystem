<script>
  $(document).ready(function() {
    
  $('#categoria').on('click',function() {
    $('#categoria-menu').toggleClass('open');
    });
  $('#btn-corazon').click(function(){
      $('#corazon').toggleClass('fa-heart-o');
    });
    $('#btn-bell').click(function(){
      $('#bell').toggleClass('fa-bell-o');
    });
  });
</script>

<div id="app">
  <nav class="navbar navbar-default navbar-static-top app-nav">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
          <span class="sr-only">Toggle Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand text-white" id="app-titulo-central" href="{{ url('/') }}">
          {{ config('app.name', 'OneSystem') }}
        </a>
      </div>
      <div class="collapse navbar-collapse" id="app-navbar-collapse">
        <ul class="nav navbar-nav">
          &nbsp;
        </ul>
        <ul class="nav navbar-nav navbar-right">
          @if (Auth::guest())
          <li>
            <ul class="nav navbar-nav navbar-right">
              <li id="categoria-menu" class="dropdown mega-dropdown " >                
              </li>
            </ul>
          </li>
          <li>
            <a id="app-btn-nav" class="login text-white input-buscar" style="color: white" data-toggle="tooltip" data-placement="left" title="login" href="#"> Login</a>
          </li>
          <li>
            <a id="app-btn-nav" class=" text-white input-buscar" style="color: white" href="{{ route('register') }}">Register</a>
          </li>
          @else
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
                <a class=" text-white input-buscar" id="btn-corazon" style="color: white" href="#"><i id="corazon" class="fa fa-heart "></i></a>
              </li>
              <li class="dropdown messages-menu">
                @include('layouts.decoraciones.menu')
              </li> 
            @endif
             <li>
              <ul class="nav navbar-nav navbar-right">
                <li class="dropdown mega-dropdown user user-menu">
                  @include('layouts.decoraciones.menuUser')
                </li>
              </ul>
              </li>
          @endif
        </ul>
      </div>
    </div>
  </nav>
</div>
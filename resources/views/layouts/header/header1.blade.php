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
            <div class="input-group margin" style="width: 200px; height: 10px;" >
              <input type="text" class="form-control" style="border-radius: 20px 0px 0px 20px">
              <span class="input-group-btn">
                <button type="button" class="btn btn-warning btn-flat"> <i class="fa fa-search"></i></button>
              </span>
            </div>
          </li>
          <li><a id="app-btn-nav" class="login text-white" style="color:white;" href="#">Login</a></li>
          <li><a id="app-btn-nav" class=" text-white" style="color:white;" href="{{ route('register') }}">Register</a></li>
          @else
          
          <li>
            <div class="input-group margin" style="width: 200px; height: 10px;" >
              <input type="text" class="form-control" style="border-radius: 20px 0px 0px 20px">
              <span class="input-group-btn">
                <button type="button" class="btn btn-warning btn-flat"> <i class="fa fa-search"></i> </button>
              </span>
            </div>
          </li>
            @if(Auth::user()->rol==1)
          <li class="dropdown messages-menu">
            @include('layouts.decoraciones.menu')
          </li> 
          
            @endif
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
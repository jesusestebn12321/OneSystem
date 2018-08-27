
<a style="color: white;" href="#" id="btn-menu" class="dropdown-toggle input-buscar" data-toggle="dropdown">
  <img src="{{asset('uploads/usuarios/'.Auth::user()->imagen)}}" class="user-image" alt="User Image">
  {{ Auth::user()->name }} <i  class="fa fa-chevron-down"></i>
</a>

<ul class="dropdown-menu mega-dropdown-menuUser row" id="dropdown" style="" >
  <div class="col-xs-7" id="app-lista-left" style="background: url(plugins/bootstrap/img/GALAXIA.jpg) repeat; bottom: -2px;">
    <li>
      <div class="container-fluid contenedor-cien">
        <div class="row" id="app-div-rigth-user">
          <ul class="list-group" id="ul-menuUser">
            
            <li class="list-group-item" id="app-img-user" >
              <img src="{{asset('uploads/usuarios/'.Auth::user()->imagen)}}" class="img-circle app-img-user-redondo" alt="User Image">
            </li> 

            <li class="list-group-item" id="app-li-nombre">
              <p class="text-center" id="p1">
                {{ Auth::user()->name }}
              </p>
              <p class=" text-center"> 
                <b> {{ config('app.name', 'OneSystem') }} </b>
              </p>
            </li>
            <li class="list-group-item app-btn-mi-cuenta" id="lista" >
              @if(Auth::user()->rol==1)
              <a href="{{ route('manageUser-index') }}" class=" btn btn-primary btn-block btn-micuenta">Mi Cuenta</a>
              @else
              <a href="{{ route('manageAdmin-index') }}" class=" btn btn-primary btn-block btn-micuenta">Mi Cuenta</a>
              @endif      
            </li>
          </ul>
        </div>
      </div>    
    </li>
  </div>
    <div class="col-xs-3" id="app-div-menu-user">
      <li class="contenedor-cien">
      <div class="container-fluid contenedor-cien" style="padding: 0px">
        <div class="row contenedor-cien" style="margin: auto">
          <ul class="contenedor-cien" id="app-ul-menu-user">
            @if(Auth::user()->rol==1)
              <li class="list-group-item " id="app-lista-user-li"><a href="{{route('manageProducto-create')}}" id="app-lista-user" ><i class="text-black fa fa-shopping-bag"></i>Ventas</a></li>
              <li class="list-group-item" id="app-lista-user-li"><a href="{{ route('manageUser-index')}}" id="app-lista-user" ><i class="text-black fa fa-shopping-basket "></i>Compras</a></li>
              <li class="list-group-item" id="app-lista-user-li"><a href="{{ route('manageUser-index')}}" id="app-lista-user" ><i class="text-black fa fa-wrench"></i>Configura</a></li>
             @endif
              <li class="list-group-item" id="app-lista-user-li">
                <a href="{{ route('logout') }}" id="app-lista-user"  onclick="event.preventDefault();document.getElementById('logout-form').submit();">
              <i class="text-black fa fa-power-off"></i>Salir<i class="hidden text-black fa fa-shopping-bag"></i></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                {{ csrf_field() }}
                </form>
              </li>
          </ul>
  
        </div>
      </div>
</li>
    </div>
  <li class="col-xs-5">
    
  </li>


</ul>
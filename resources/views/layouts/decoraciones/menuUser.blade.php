<a style="color: white;" href="#" id="btn-menu" class="dropdown-toggle input-buscar" data-toggle="dropdown">
  <img src="{{asset('uploads/usuarios/'.Auth::user()->imagen)}}" class="user-image" alt="User Image">
  {{ Auth::user()->name }} <i  class="fa fa-chevron-down"></i>
</a>
<ul class="dropdown-menu mega-dropdown-menu row" style="margin-top: 10px;width: 400px;height: 300px" >
  <div class="col-xs-6">
    <li>
      <div class="container-fluid">
        <div class="row" style="background: #000;outline: 0px">
          <ul class="list-group" id="ul-menuUser" >
            <li class="list-group-item" style="border-radius: 100%;outline: 0px;background: #000" >
              <img src="{{asset('uploads/usuarios/'.Auth::user()->imagen)}}" class="img-circle" alt="User Image" style="border-radius: 100%; width: 100% ; height: 100%;">
            </li>
            <li class="list-group">
              <p class="text-black text-center">
                {{ Auth::user()->name }}
              </p>
              <p class="text-black text-center"> 
                <b> {{ config('app.name', 'OneSystem') }} </b>
              </p>
            </li>
            <li class="list-group-item" id="lista" style="border:none;background: #000">
              @if(Auth::user()->rol==1)
              <a href="{{ route('manageUser-index') }}" class=" btn btn-primary btn-block" style="width: 100%;">Mi Cuenta</a>
              @else
              <a href="{{ route('manageAdmin-index') }}" class=" btn btn-primary btn-block" style="width: 100%;">Mi Cuenta</a>
              @endif      
            </li>
          </ul>
        </div>
      </div>    
    </li>
  </div>
    <div class="col-xs-3">
      <div class="container-fluid">
        <div class="row">
      <ul style=" width: 140px;height: 1rem;  left:-1 ; text-align: center; margin-left: -2rem;margin-top: 2rem">
        @if(Auth::user()->rol==1)
          <li class="list-group-item "><a href="{{route('manageProducto-create')}}"  style="text-decoration: none" >Vender</a></li>
         @endif
         @if(Auth::user()->rol==1)
          <li class="list-group-item "><a href="{{ route('manageUser-index') }}"  style="text-decoration: none" >Configura</a></li>
         @endif
      <li class="list-group-item">
        <a href="{{ route('logout') }}" style="text-decoration: none"  onclick="event.preventDefault();document.getElementById('logout-form').submit();">
          Logout</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
          {{ csrf_field() }}
          </form>
        </li>
      </ul>
  
    </div>
      </div>

    </div>
  <li class="col-xs-5">
    
  </li>


</ul>
<a style="color: white;" href="#" class="dropdown-toggle" data-toggle="dropdown">
  <img src="{{asset('uploads/usuarios/'.Auth::user()->imagen)}}" class="user-image" alt="User Image">
  {{ Auth::user()->name }} <span class="caret"></span>
</a>
<ul class="dropdown-menu mega-dropdown-menu row">

  <li class="col-xs-7" id="li-userImg">
    <div class="row">
      <ul class="list-group" id="ul-menuUser" >
        <li class="list-group-item" style="border-radius: 100%; border:0px;" >
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
        <li class="list-group-item" id="lista" style="border:0px;">
          @if(Auth::user()->rol==1)
          <a href="{{ route('manageUser-index') }}" class=" btn btn-primary btn-block" style="width: 100%;">Mi Cuenta</a>
          @else
          <a href="{{ route('manageAdmin-index') }}" class=" btn btn-primary btn-block" style="width: 100%;">Mi Cuenta</a>
          @endif      
        </li>
      </ul>
    </div>
  </li>
  <li class="col-xs-5">
    <div class="row">
      <ul class="list-group" id="ul-menuUser">
        <li class="list-group-item" style="border:0px;">
          @if(Auth::user()->rol==1)
          <a href="{{route('manageProducto-create')}}" class="btn btn-default btn-block">Vender</a>
          @endif
        </li>
        <li class="list-group-item" id="lista" style="border:0px;">
          @if(Auth::user()->rol==1)
          <a href="{{ route('manageUser-index') }}" class=" btn btn-primary btn-block" style="width: 100%;">Configura</a>
          @endif
        </li>
        <li class="list-group-item" id="lista" style="border:0px;">
          <a class="btn btn-info btn-block" href="{{ route('logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          Logout</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
          {{ csrf_field() }}
          </form>
        </li>
      </ul>
    </div>
  </li>
</ul>
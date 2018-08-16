<?php $q=0?><!-- act -->
<?php $i=0?>{{-- pausados  --}}
<?php $x=0?><!-- carrito -->
<?php $y=0?><!-- compras -->
@if(Auth::user()->rol==1)
  @foreach($carrito as $carritos)
      @if($carritos->productoUser->act == 2 )
      <?php $x++?>
      @endif
  @endforeach

  @foreach($producto as $productos)
    @if($productos->user_id==Auth::user()->id)
      @if($productos->act == 0)
      <?php $i++?>
      @elseif($productos->act==1)
      <?php $q++?>
      @else
      <?php $y++?>
      @endif
    @endif
  @endforeach

  @for($j=0, $m=0 ; $j<sizeof($post);$j++)
    @if($post[$j]->status==0)
      <?php $m++ ?> 
    @endif
@endfor
@endif

<div class="main-sidebar bg-black" style=" height: 100rem; position: absolute;">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{asset('uploads/usuarios/'.Auth::user()->imagen)}}" class="img-circle" alt="User Image">
      </div>
    </div>
    

    <ul class="sidebar-menu">
      <li class="header">
      @if(Auth::user()->rol==1)
        MENÚ 
      @elseif(Auth::user()->rol==0)
        <i class="fa fa-user-secret"></i>ADMIN 
      @endif
    </li>
      @if(Auth::user()->rol==1)

        <li class=" treeview">
          <a href="{{route('manageUser-index')}}">
            <i class="fa fa-home"></i> <span>Inicio</span>
            <span class="pull-right-container">
              <i class="fa pull-right"></i>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="{{route('manageMensajes')}}">
            <i class="fa fa-bell"></i> <span>Notificaciones
              @if($m>0)  
              <span class="label label-warning pull-right">{{$m}}</span></span>
              @endif</span>
          </a>
        </li>
        <li class="treeview">
          <a href="{{route('manageArticulos')}}">
            <i class="fa fa-play"></i> <span>Art Activos
              @if($q>0)  
                <span class="label label-info pull-right">{{$q}}</span></span>
              @endif</span>
          </a>
        </li>
        <li class="treeview">
          <a href="{{route('manageArticuloPausado')}}">
            <i class="fa fa-pause"></i> <span>Art Pausados @if($i>0)  
              <span class="label label-success pull-right">{{$i}} </span></span>
              @endif</span>
          </a>          
        </li>
        <li class="treeview">
          <a href="{{route('manageCarrito')}}">
            <i class="fa fa-shopping-cart"></i> <span>Carrito @if($x>0)  
              <span class="label label-danger pull-right">{{$x}} </span></span>
              @endif</span>
            </a>
        </li>
        <li class="treeview">
          <a href="{{route('manageArticuloVendidos')}}">
            <i class="fa fa-shopping-bag"></i> <span>Ventas @if($y>0)  
              <span class="label label-default pull-right">{{$y}} </span></span>
              @endif</span>
            </a>
        </li>
       
        <li class="treeview">
          <a href="{{route('manageConfig')}}">
            <i class="fa fa-wrench"></i> <span>Configuracion</span>
          </a>
        </li>
     <li class="treeview">
        <a href="{{route('logout')}}">
          <i class="fa fa-power-off"></i> <span>Cerrar Seccion</span>
        </a>
      </li>
      @endif

      @if(Auth::user()->rol==0)

        
        <li class="treeview">
          <a href="{{route('manageAdmin-index')}}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-play"></i> <span>Usuarios Act</span>
          </a>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pause"></i> <span>Usuarios Pausados</span>
          </a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-list-alt"></i> <span>Categorias</span>
          </a>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-key"></i> <span>admin</span>
          </a>
        </li>

        <li class="treeview">
          <a href="{{route('manageConfig-A')}}">
            <i class="fa fa-wrench"></i> <span>Configuracion</span>
          </a>
        </li>

      <li class="treeview">
        <a href="{{route('logout')}}">
          <i class="fa fa-power-off"></i> <span>Cerrar Seccion</span>
        </a>
      </li>
      @endif
    
    </ul>
  </section>
  <!-- /.sidebar -->
</div>

@extends('layouts.app2')
@section('content')
<?php $j=0?><!-- act -->
<?php $i=0?>{{-- pausados  --}}
<?php $x=0?><!-- vendidos -->
<?php $y=0?><!-- compras -->
@foreach($carrito as $carritos)
      @if($carritos->productoUser->act == 2 )
      <?php $x++?>
      @endif
@endforeach
@foreach($producto as $productos)
  @if($productos->user_id==Auth::user()->id)
    @if($productos->act == 0)
    <?php $j++?>
    @elseif($productos->act==1)
    <?php $i++?>
    @else
    <?php $y++?>
    @endif

  @endif
@endforeach

    <h1>
      Dashboard
      <small>Mi Cuenta</small>
    </h1>
    <h2 style="font-family: cursive;" >Mis Articulos</h2>
    <div class=" box">
      <section class="content">
        <div class="row">
          <div class="col-lg-3 col-xs-6">

            <div class="small-box bg-aqua">
              <div class="inner">
                <h3 id="app-titulo-caja"> 
                 @if($i>0) {{$i}} @endif Articulos  <i class="fa fa-play-circle"></i></h3>

                <p>Articulos Publicados</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{route('manageArticulos')}}" class="small-box-footer">Ver <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-xs-6">

            <div class="small-box bg-green">
              <div class="inner">
                <h3 id="app-titulo-caja"> 
                @if($j>0) {{$j}} @endif  Articulos<i class="fa fa-pause-circle"></i> </h3>
                <p>Pausados no vicibles</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{route('manageArticuloPausado')}}" class="small-box-footer">Ver <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-xs-12">
            <div class="small-box bg-yellow">
              <div class="inner">
                <h3 id="app-titulo-caja">@if($y>0) {{$y}} @endif Articulos<i class="fa-shopping-basket fa"></i> </h3>
                <p>Vendidos</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="{{route('manageArticuloVendidos')}}" class="small-box-footer">Ver <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-xs-12">
            <div class="small-box bg-navy">
                <div class="inner">
                  <h3 id="app-titulo-caja">@if($x>0) {{$x}} @endif Carrito<i class="fa-shopping-cart fa"></i> </h3>
                  <p>Articulos Comprados</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="{{route('manageCarrito')}}" class="small-box-footer">Ver <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
      </section>
    </div>
  



@endsection

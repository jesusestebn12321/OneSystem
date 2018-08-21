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

          <div class="col-lg-6 col-xs-6">
            <div class="small-box bg-aqua">
              <div class="inner">
                  <div class="row" >
                    <div class="col-lg-1">@if($i>0)<h3 id="app-con-caja">{{$i}}</h3>@endif</div>
                    <div class="col-lg-9"><h3 id="app-titulo-caja">Articulos</h3></div>
                    <div class="col-lg-2"><h3><i class="fa fa-play-circle"></i></h3></div>
                  </div>

                
                <p>Articulos Publicados</p>
              </div>
              <div class="icon">
                <i class="fa fa-play"></i>
              </div>
              <a href="{{route('manageArticulos')}}" class="small-box-footer">Ver <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-6 col-xs-6">
            <div class="small-box bg-green">
              <div class="inner">
                  <div class="row">
                    <div class="col-lg-1">@if($j>0)<h3 id="app-con-caja">{{$j}}</h3>@endif</div>
                    <div class="col-lg-9"><h3 id="app-titulo-caja">Articulos</h3></div>
                    <div class="col-lg-2">
                      <h3><i class="fa fa-pause-circle"></i></h3>
                    </div>
                  </div>
                <p>Pausados no vicibles</p>
              </div>
              <div class="icon">
                <i class="fa fa-pause"></i>
              </div>
              <a href="{{route('manageArticuloPausado')}}" class="small-box-footer">Ver <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>

        </div>
        <div class="row">

          <div class="col-lg-3 col-xs-12">
            <div class="small-box bg-navy">
                <div class="inner">
                  <div class="row">
                    <div class="col-lg-2">@if($x>0)<h3 id="app-con-caja">{{$x}}</h3>@endif</div>
                    <div class="col-lg-7"><h3 id="app-titulo-caja">Carrito</h3></div>
                    <div class="col-lg-3"><h3><i class="fa-shopping-cart fa"></i></h3></div>
                  </div>
                  <p>Articulos Comprados</p>
                </div>
                <div class="icon">
                  <i class="fa-shopping-cart fa"></i>
                </div>
                <a href="{{route('manageCarrito')}}" class="small-box-footer">Ver <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-6 col-xs-12">
            <div class="small-box bg-red">
                <div class="inner">
                  <div class="row">
                    <div class="col-lg-1"><h3 id="app-con-caja">3</h3></div>
                    <div class="col-lg-9"><h3 id="app-titulo-caja">Favoritos</h3></div>
                    <div class="col-lg-2"><h3><i class="fa-heart fa"></i></h3>
                    </div>
                  </div> 
                  <p>Articulos Favoritos</p>
                </div>
                <div class="icon">
                  <i class="fa-heart fa"></i>
                </div>
                <a href="#" class="small-box-footer">Ver <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-xs-12">
            <div class="small-box bg-yellow">
              <div class=" inner">
                <div class="row">
                  <div class="col-lg-2">@if($y>0)<h3 id="app-con-caja">{{$y}}</h3>@endif</div>
                  <div class="col-lg-7"><h3 id="app-titulo-caja">Articulos</h3></div>
                  <div class="col-lg-3"><h3><i class="fa-shopping-basket fa"></i></h3>    
                  </div>
                </div>
                <p>Vendidos</p>
              </div>
              <div class="icon">
                <i class="fa-shopping-basket fa"></i>
              </div>

              <a href="{{route('manageArticuloVendidos')}}" class="small-box-footer">Ver <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
        </div>
      </section>
    </div>

@endsection

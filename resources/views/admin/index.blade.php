@extends('layouts.app2')
@section('content')

    <h1>
      Dashboard
      <small>Mi Cuenta</small>
    </h1>
    <h2 style="font-family: cursive;" >Admin {{Auth::user()->name}} <i class="fa fa-user-secret"></i> </h2>
    <div class=" box">
      <section class="content">
        <div class="row">
          <div class="col-lg-6 col-xs-6">

            <div class="small-box bg-yellow">
              <div class="inner">
                <h3 id="app-titulo-caja"> 
                  Usuarios  <i class="fa-pull-right fa fa-play-circle"></i></h3>
                <p>Usuarios Activos</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{route('manageUserActivo-A')}}" class="small-box-footer">Ver <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-6 col-xs-6">

            <div class="small-box bg-aqua">
              <div class="inner">
                <h3 id="app-titulo-caja"> 
                  Usuarios<i class="fa fa-pause-circle fa-pull-right"></i> </h3>
                <p>Pausados no vicibles</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{route('manageUserPausado-A')}}" class="small-box-footer">Ver <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-lg-3 col-xs-6">
          </div>
          <div class="col-lg-6 col-xs-6">
            <div class="small-box bg-red">
              <div class="inner">
                <h3 id="app-titulo-caja"> 
                  Categorias<i class="fa fa-list-alt fa-pull-right"></i> </h3>
                <p>Crea y Borra Categorias</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{route('manageCategoria-A')}}" class="small-box-footer">Ver <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-xs-6">
          </div>
        </div>
      </section>
    </div>

@endsection

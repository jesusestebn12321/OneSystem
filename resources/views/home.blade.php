@extends('layouts.app')
@section('slider')
@include('layouts/slider/slider')
@endsection
@section('script')
<script>
        $(document).ready(function(){
        $(".login").click(function(){
           $(".modalLogin").fadeIn();
       });
        $(".cerrarLogin").click(function(){

            $(".modalLogin").fadeOut(300);
        });

        $(".registrar").click(function(){
           $(".modalregistrar").fadeIn();
       });
        $(".cerrarRegistrar").click(function(){

            $(".modalRegistrar").fadeOut(300);
        });
    });
</script>
@endsection
@section('content')
@include('layouts/modales/modalLogin')
<div class="container-fluid">
    <div class="row">
        <div class="">
            <section class="app-section"> 
                <div class="container-fluid app-titulo1">   
                    <i class="app-fa-producto app-icon fa fa-shopping-cart"></i>
                    <h2>PRODUCTOS</h2>
                    <p>Compra tus facil y rapido!</p> <hr>
                </div>

                <div class="container-fluid">
                    <div class="row ">
                        @include('layouts.slider.sliderProducto')
                    </div>
                </div>
            </section>
            <section class="app-section">
                <div class="container-fluid app-titulo2">   
                    <i class="app-fa-categoria app-icon fa fa-table"></i>
                    <h2>CATEGORIAS</h2>
                    <p>Selecciona tus productos por categorias</p><hr>
                </div>
                    <div class="row">
                        <div class="container">
                            <div id="carousel-reviews" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="item active">
                                        @for($r=0;  $r<6; $r++ )
                                        <?php $i=0;?>
                                        @foreach($categoria[$r]->productos as $c)
                                        <?php $i++;?>
                                        @endforeach
                                        @if($i!=0)
                                        <div class="col-md-4 col-sm-6">
                                            <div class="info-box bg-gray">
                                                <span class="info-box-icon {{$categoria[$r]->color}}"><i class="fa {{$categoria[$r]->icono}}"></i></span>
                                                <div class="info-box-content bg-gray">
                                                    <h2><span class="info-box-text" style="font-family: cursive; letter-spacing: 2px;" >{{$categoria[$r]->nombre}}</span></h2>
                                                    <span class="info-box-number">{{$i}}</span>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        @endfor
                                    </div>
                                    <div class="item">
                                        @for($q=$r;  $q<sizeof($categoria) && $q<12 ; $q++ )
                                        <?php $l=0;?>
                                        @foreach($categoria[$q]->productos as $c)
                                        <?php $l++;?>
                                        @endforeach
                                        @if($l!=0)
                                        <div class="col-md-4 col-sm-6">
                                            <div class="info-box bg-gray">
                                                <span class="info-box-icon {{$categoria[$q]->color}}"><i class="fa {{$categoria[$q]->icono}}"></i></span>
                                                <div class="info-box-content bg-gray">
                                                    <h2><span class="info-box-text" style="font-family: cursive; letter-spacing: 2px;" >{{$categoria[$q]->nombre}}</span></h2>
                                                    <span class="info-box-number">{{$l}}</span>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        @endfor
                                    </div>
                                </div>
                                <a class="left carousel-control" href="#carousel-reviews" role="button" data-slide="prev">
                                    <i style="left:  -30px; font-size: 30px;" class="text-black fa fa-chevron-circle-left "></i>
                                </a>
                                <a class="right carousel-control" href="#carousel-reviews" role="button" data-slide="next">
                                    <i style="right: -30px; font-size: 30px;" class="text-black fa fa-chevron-circle-right "></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="app-seccion3">
                <div class="container-fluid app-titulo3">   
                    <i class="app-fa-dolar app-icon fa fa-dollar"></i>
                    <h2>VENDELO YA!</h2>
                    <p>Formas de vender tus productos</p><hr>
                </div>
                <div class="row">
                    <div class="container">
                        <div class="col-xs-12 col-sm-4">
                            <ul class="list-group"  >
                                <il class="list-group-item app-lista1"  >
                                    <h2>Gratuito</h2>
                                </il>
                                <il class="list-group-item">Duracion<i class="badge">31 dias</i></il>
                                <il class="list-group-item">Marketing<i class="fa-pull-right fa fa-star"></i></il>
                                <il class="list-group-item">Posicionamienrto<i class="fa-pull-right fa fa-star-o"></i></il>
                                <il class="list-group-item">Confiavilidad<i class="fa-pull-right fa fa-star-o "></i></il>
                                <il class="list-group-item app-precio"> <i class="app-pago">GRATIS</i>
                                    <button class="btn app-btn1">GRATIS</button>
                                </il>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <ul class="list-group">
                                <il class="list-group-item app-lista2">
                                    <h2>PRO</h2>
                                </il>
                                <il class="list-group-item">Duracion<i class="badge">62 dias</i></il>
                                <il class="list-group-item">Marketing<i class="fa-pull-right fa fa-star"></i></il>
                                <il class="list-group-item">Posicionamiento<i class="fa-pull-right fa fa-star"></i></il>
                                <il class="list-group-item">Confiavilidad<i class="fa-pull-right fa fa-star"></i></il>
                                <il class="list-group-item app-precio"> <i class="app-pago">10% de Comicion</i>
                                    <button class="btn app-btn1">PRO</button>
                                </il>
                            </ul>
                        </div>
                        <div  class="col-xs-12 col-sm-4">
                            <ul  class="list-group">
                                <il class="list-group-item app-lista1"><h2>PRIMIUM</h2></il>
                                <il class="list-group-item">Duracion<i class="badge">Inlimitada</i></il>
                                <il class="list-group-item">Marketing <i class="fa-pull-right fa fa-star"></i></il>
                                <il class="list-group-item">Provabilidad de Venta <i class="fa-pull-right fa fa-star"></i></il>
                                <il class="list-group-item">Confiavilidad<i class="fa-pull-right fa fa-star"></i></il>
                                <il class="list-group-item app-precio"> <i class="app-pago">30% de Comicion</i>
                                    <button class="btn app-btn1">PRIMIUM</button>
                                </il>
                            </ul>
                        </div>
                    </div>
            </section>
        </div>
    </div>
</div>
@endsection
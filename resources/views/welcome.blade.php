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
        <div>
            <div>
    <!-- esta line es nueva es por sia las mosca no hay productos registrados no expote nada -->
            
                <section class="app-section "> 
                    <div class="container-fluid app-titulo1">   
                        <i class="app-fa-producto app-icon fa fa-shopping-cart"></i>
                        <h2 id="app-titulo" >PRODUCTOS</h2>
                        <p><b>¡Compra Articulos facil y rapido!</b></p> <hr>
                    </div>

                    <div class="container-fluid">
                        <div class="row ">
                                {{-- @include('layouts.slider.sliderProducto') --}}
                        </div>
                    </div>
                </section>  
            </div>

            
               
            
            <section class="app-seccion3">
                <div class="container-fluid app-titulo3">   
                    <i class="app-fa-dolar app-icon fa fa-dollar"></i>
                    <h2 id="app-titulo" >VENDELO YA!</h2>
                    <p><b>Formas de vender tus productos</b></p><hr>
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
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="{{asset('plugins/bootstrap/icon/portafolio.ico')}}" />
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'OneSystem') }}</title>
  <!-- Styles -->
  <section>
    @yield('css')
  </section>
  <link href="{{asset('css/app.css')}}" rel="stylesheet">
  <link href="{{asset('plugins/bootstrap/css/bootstrap-theme.min.css')}}" rel="stylesheet">
  <link href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('dist/sweetalert.css')}}" rel="stylesheet">
  <link href="{{asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('admin-lte/dist/css/skins/_all-skins.min.css')}}" rel="stylesheet">
  <link href="{{asset('plugins/bootstrap/css/main.css')}}" rel="stylesheet">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin-lte/dist/css/AdminLTE.min.css')}}">
  <!-- Script -->
  <script src="{{asset('admin-lte/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
  <script src="{{asset('plugins/bootstrap/js/main.js')}}"></script>
</head>
<body>
  
  <header>
    @include('layouts/decoraciones/barra')
      @if(!Auth::guest()) 
        @if(Auth::user()->rol!=0)
          @include('layouts/decoraciones/redes')
          @include('layouts/decoraciones/carrito')
        @endif
      @else
          @include('layouts/decoraciones/redes')
      @endif
    @include('layouts/header.header1')
    <div class="row">
      <div class="container-fluid">
         @yield('slider')    
      </div>
    </div>
  </header>

  <section class="app-section content">
    @yield('content')
  </section>
</body>
<footer style="background: black">
  <div class="app-footer"> 
    @include('layouts/footer/footer')
  </div>
</footer>
<!------------------------------------------------ Scripts -------------------------------------------------->
<script src="{{asset('admin-lte/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<script src="{{asset('admin-lte/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin-lte/dist/js/demo.js')}}"></script>
<script src="{{asset('plugins/bootstrap/js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('dist/sweetalert.min.js')}}"></script>
<script src="{{asset('plugins/bootstrap/js/main.js')}}"></script>
<script src="{{asset('plugins/js/main.js')}}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<div>
  @yield('script')
</div>
</body>
</html>
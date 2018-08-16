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
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/bootstrap/css/bootstrap-theme.min.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('dist/sweetalert.css')}}" rel="stylesheet">
    
    <link href="{{asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/bootstrap/css/main.css')}}" rel="stylesheet">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('admin-lte/dist/css/AdminLTE.min.css')}}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{asset('admin-lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin-lte/dist/css/style_child.css')}}">

       <script src="{{asset('admin-lte/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
    <script src="{{asset('plugins/bootstrap/js/main.js')}}"></script>

   </head>
  <body>
    <header>
      @include('layouts/decoraciones/redes')
      @include('layouts/decoraciones/barra')
      @if(Auth::user()->rol!=0)
      @include('layouts/decoraciones/carrito')
      @endif
      <div id="app">
  <nav style="margin-bottom: none;" class="navbar navbar-default navbar-static-top app-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand " id="app-titulo-central"   style="color: white" href="{{ url('/') }}">
            {{ config('app.name', 'OneSystem') }}
          </a>
        </div>
        <div class="collapse navbar-collapse" id="app-navbar-collapse">
          <ul class="nav navbar-nav">
            &nbsp;
          </ul>
          <ul class="nav navbar-nav navbar-right">
            

            <li class="dropdown messages-menu">
             
            </li> 

            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown user user-menu">
               
            </li>
          </ul>
          </li>

        </ul>
      </div>
    </div>
  </nav>
</div>
      <div class="row">
        <div class="container-fluid">
           @yield('slider')    
        </div>
      </div>
    </header>
    
    <section class="app-section content">
      @yield('content')
    </section>

    <footer>
      <div class="app-footer">
        @include('layouts/footer/footer')
      </div>
    </footer>

<!-- Scripts -->

<!-- jQuery 2.2.3 -->
<script src="{{asset('admin-lte/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{asset('admin-lte/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin-lte/plugins/input-mask/jquery.inputmask.js')}}"></script>
<script src="{{asset('admin-lte/plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
<script src="{{asset('admin-lte/plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('admin-lte/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('admin-lte/dist/js/demo.js')}}"></script>

<script src="{{asset('plugins/bootstrap/js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('dist/sweetalert.min.js')}}"></script>
<script src="{{asset('plugins/bootstrap/js/main.js')}}"></script>

<script src="{{asset('plugins/js/jquery.dataTables.min.js')}}"> </script>

<script src="{{asset('plugins/js/dataTables.bootstrap.js')}}"></script>

<script src="{{asset('plugins/js/main.js')}}"></script>
<script src="{{ asset('js/app.js') }}"></script>

<div>
  

  @yield('script')
</div>


</body>
</html>

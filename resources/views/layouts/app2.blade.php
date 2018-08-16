<!DOCTYPE html>
<html style="height: auto;" lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('plugins/bootstrap/icon/portafolio.ico')}}" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'OneSystem') }}</title>

    <!-- Styles -->
          <link href ="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
          <link href ="{{asset('admin-lte/dist/css/AdminLTE.min.css')}}" rel  ="stylesheet">
          <link href ="{{asset('admin-lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}" rel  ="stylesheet">
          <link href ="{{asset('admin-lte/dist/css/style_child.css')}}" rel  ="stylesheet">
          <link href ="{{asset('css/app.css')}}" rel="stylesheet">
          <link href ="{{asset('plugins/bootstrap/css/bootstrap-theme.min.css')}}" rel="stylesheet">
          <link href ="{{asset('dist/sweetalert.css')}}" rel="stylesheet">

          <link href ="{{asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
          <link href ="{{asset('admin-lte/dist/css/skins/_all-skins.min.css')}}" rel   ="stylesheet">
          <link href ="{{asset('plugins/bootstrap/css/main.css')}}" rel="stylesheet">
          
          <!--------------------------------------- Script --------------------------------------------------------->
          <script src ="{{asset('admin-lte/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
          <script src ="{{asset('plugins/bootstrap/js/main.js')}}"></script>
          <script src="{{asset('plugins/js/dataTables.bootstrap.js')}}"></script>

   </head>
   <body style="height: auto;"  class="hold-transition skin-blue sidebar-mini">
   
    <header class="main-header">
      @include('layouts/decoraciones/barra') 
      @include('layouts/header.header2') 
     
    </header>
    
    @include('layouts/sidebar/sidebar')
   
  <div class="content-wrapper">
  <section class="content-header">
    @yield('content')
  </section>
</div>


    <footer class="main-footer">
      @include('layouts/footer/footer')
    </footer>



<!-- Scripts -->

<!-- jQuery 2.2.3 -->
<script src="{{asset('admin-lte/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{asset('admin-lte/bootstrap/js/bootstrap.min.js')}}"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('admin-lte/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
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
@extends('layouts.app')
@section('content')
<div class="  ">
  <h1><span class="app-titulo-productoS">{{$producto->productoImagen->producto->nombre}}</span></h1>
</div>
<div class="container-fluid">
  <div class="row">
    <div  class="col-lg col-sm-9">
      <div class="carousel slide app-div-img " id="{{$producto->id}}" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#{{$producto->id}}" data-slide-to="0" class="active"></li>
          @for($j=1; $j<sizeof($producto->productoImagen->producto->productoImagen);$j++)
            <li data-target="#{{$producto->id}}" data-slide-to="{{$j}}" class=""></li>
          @endfor
        </ol>
        <div class="carousel-inner ">
          <div class="item active  app-div-img">
          
          <img class="img-responsive img-rounded" id="productos" src="{{asset('uploads/imagenes/productos/'.$producto->productoImagen->imagen->imagen)}}" alt="Producto">
        </div>   
          @for($j=1; $j<sizeof($producto->productoImagen->producto->productoImagen);$j++)
            <div class="item  app-div-img">
              <img class="img-responsive img-rounded" id="productos" src="{{asset('uploads/imagenes/productos/'.$producto->productoImagen->imagen->imagen)}}" alt="Producto">
            </div>
          @endfor
        <a href="#{{$producto->id}}" class="carousel-control left" data-slide="prev"><span class="ghyphicon ghyphicon-chevron-left"></span></a>
        <a href="#{{$producto->id}}" class="carousel-control right" data-slide="next"><span class="ghyphicon ghyphicon-chevron-right"></span></a>
      </div>
    </div>
  </div>
    <div class="col-sm-3" >
      <ul class="list-group">
        <il class="list-group-item">
          Noce que poner<i class="badge">PRO</i>
        </il>
        <il class="list-group-item">
          Categoria<i class="fa-pull-right">{{$producto->productoImagen->producto->categoria->nombre}}</i>
        </il>
        <il class="list-group-item">
          Descripcion <i class="fa-pull-right">{{$producto->productoImagen->producto->descripcion}}</i>
        </il>
        <il class="list-group-item">
          Stock<i class="badge">{{$producto->productoImagen->producto->stock}}</i>
        </il>
        <il class="list-group-item app-precio">
          Precio<i class="fa-pull-right">{{$producto->productoImagen->producto->precio}}</i>
        </il>
        <il class="list-group-item app-precio">
          <form action="{{route('manageComprar',$producto->id)}}">
            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
            <button class="btn bnt-block btn-primary">Comprar</button>
          </form>
        </il>
      </ul>
    </div> 
  </div>
</div>
<!---------------------------------------------------- post -----------------------------------------------------------> 
<div style="margin-top: 100px;" class="row">
  <div class="container">
    <div class="box box-success">
      <div class="box-header">
        <i class="fa fa-comments-o"></i>
        <h3 class="box-title">Chat</h3>
        <div class="box-tools pull-right" data-toggle="tooltip" >
        </div>
      </div>
      <div class="box-body chat" id="chat-box">
        <?php $i=0; ?>
        @foreach($post as $posts)
        @if($posts->producto_user_id == $producto->id)
          <?php $i++; ?>
          @if($posts->user_id != Auth::user()->id)
             <div class="bg-gray-light" id="app-chat-div">
             <div class="item"></div>
            <p class="message">
              <a href="#" id="app-chat-pUser" class="name">
                <small id="app-chat-pUser" class=" pull-right"><i class="fa fa-clock-o"></i> {{$posts->created_at}}</small>
                {{$posts->user->name}}
              </a>
            </p>
            <div class="attachment" id="app-chat-contenido" >       
              <p class="message">
                {{$posts->post}}.
              </p>
            </div></div>
          @else
          <div id="app-chat-div" class="bg-gray-light">
            <div class="item "></div>
            <p class="message ">
              <a href="#" id="app-chat-pUser2" class="name">
                <small id="app-chat-pUser2" class=" pull-right"><i class="fa fa-clock-o"></i> {{$posts->created_at}}</small>
                {{$posts->user->name}}
              </a>
            </p>
            <div class="attachment" id="app-chat-contenido2">       
              <p class="message">
                {{$posts->post}}.
              </p>
            </div></div>
          @endif 
        @else       
        @endif     
        @endforeach 
        @if($i==0)
          <div class="alert alert-block alert-warning " style="margin-top: 44px;">
            <i class="fa fa-exclamation-triangle fa-1 text-black" style="float:left; margin-right: 16px;"></i>
            <p class="margin-bottom-10 text-black">
                No existen Post.
            </p>
          </div>
        @endif
        <form action="{{route('managePost-create', $producto->productoImagen->id)}}" method="post">
         {!!csrf_field()!!}
         <input type="hidden" name="user" value="{{Auth::user()->id}}">
         <input type="hidden" name="status" value="1">
         <div class="box-footer">
          <div class="input-group">
            <input class="form-control" name='post' placeholder="Type message...">
            <div class="input-group-btn">
              <button  type="submit" class="btn btn-success"><i class="fa fa-play"></i></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

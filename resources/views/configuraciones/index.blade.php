@extends('layouts.app2')
@section('content')
<div class="row">
<div class="container">
 <div class="col-xs-3"></div> 
 <div class="box box-primary col-xs-5 ">
            <div class="box-body box-profile">
                       <div class="form-group">

              <img class="profile-user-img img-responsive img-circle" src="{{asset('uploads/usuarios/'.Auth::user()->imagen)}}" alt="User profile picture">
                       </div>

              <form class="form-horizontal" method="POST" action="">
                        {{ csrf_field() }}

                        <input type="hidden" name="imagen" >

                       <div class="form-group" >
                        <input type="file" class="form-contro" name="email" value="{{ Auth::user()->email }}">

                       </div>    
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Nombre</label>
                            <div class="col-md-6">
                                <input  type="text" class="form-control" name="name" value="{{Auth::user()->name}}" placeholder="{{Auth::user()->name}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Telefono</label>
                            <div class="col-md-6">
                                <input  type="text" class="form-control" name="phone" value="" placeholder="">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label">Password</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" value="{{Auth::user()->password}}" name="password">
                            </div>
                        </div>
                        

                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Cambiar
                                </button>
                            </div>
                        </div>
                    </form>
            </div>
            <!-- /.box-body -->
          </div>
</div>
</div>
@endsection

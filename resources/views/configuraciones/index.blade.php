@extends('layouts.app2')
@section('content')
<div class="row">
    <div class="container"> 
        <div class="box box-primary col-sm-5 ">
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
                        <input  type="number" class="form-control" name="phone" value="" placeholder="">
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="col-md-4 control-label">Old Password</label>
                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control" value="{{Auth::user()->password}}" name="password">
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="col-md-4 control-label">New Password</label>
                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control" value="{{Auth::user()->password}}" name="password">
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
        </div>
        <div class="box box-danger col-sm-5" style="left: 20px;">
            <ul style="margin-top:20px; ">
                <li class="list group item"><button class="btn btn-primary">1</button></li>
            </ul>
            <ul>
                <li class="list group item"><button class="btn btn-primary">2</button></li>
            </ul>
            <ul>
                <li class="list group item"><button class="btn btn-primary">3</button></li>
            </ul>
            <ul>
                <li class="list group item"><button class="btn btn-primary">4</button></li>
            </ul>
            <ul>
                <li class="list group item"><button class="btn btn-primary">5</button></li>
            </ul>
            <ul>
                <li class="list group item"><button class="btn btn-primary">6</button></li>
            </ul>
        </div>
    </div>
</div>
<div class="row">
    <div class="container">
        
    </div>
</div>
@endsection

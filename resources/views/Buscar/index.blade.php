@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            {{$i=0}}
            @if(count($search)==0)
            @endif
            @foreach($search as $productos)
                {{$i++}}
                {{$productos->nombre}}
                
            @endforeach
        </div>
    </div>
@endsection
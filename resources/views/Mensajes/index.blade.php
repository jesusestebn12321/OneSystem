@extends('layouts.app2')
@section('content')
<div class="row">
    <div class="container">
        <div class="col-xs-11">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Notificaciones</h3>
                </div>
                <div class="box-body no-padding">
                    <div class="mailbox-controls">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
                            <button type="button" class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
                            <button type="button" class="btn btn-default btn-sm"><i class="fa fa-share"></i></button>
                        </div>
                        <a href="#" type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></a>
                        <div class="pull-right">Paginas
                            <div class="btn-group">
                                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive mailbox-messages">
                        <table class="table table-hover table-striped">
                            <tbody>
                                @foreach($post as $posts)
                                    @if($posts->user_id != Auth::user()->id)
                                        <tr>
                                            @if($posts->status == 1)
                                                <td><i class="fa fa-envelope-open"></i></td>
                                            @else
                                                <td><i class="fa fa-envelope-o"></i></td>
                                            @endif
                                            <td class="mailbox-name"><a href="read-mail.html">{{$posts->user->name}}</a></td>
                                            <td class="mailbox-subject"><b>OneSystem </b> </td>
                                            <td class="mailbox-attachment">{{$posts->post}}.</td>
                                            <td class="mailbox-date">{{$posts->created_at}}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div> 
                </div>
                <div class="box-footer no-padding">
                    <div class="mailbox-controls">
                        <div class="pull-right">Paginas
                            <div class="btn-group">
                                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
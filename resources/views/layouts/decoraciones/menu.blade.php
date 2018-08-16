

@for($j=0, $i=0 ; $j<sizeof($post);$j++)
  @if($post[$j]->status==0)
    <?php $i++ ?> 
  @endif
@endfor
<a style="color: white;" href="#" class="dropdown-toggle" data-toggle="dropdown">
  <i class="fa fa-bell"></i>
  @if($i>0)
  <span class="label label-success">{{$i}}</span>
  @endif
</a>
<ul class="dropdown-menu">
  <li class="header"> @if($i>0){{$i}}@endif Notificaciones Nuevas</li>
  <li>
    <ul class="menu">
    @foreach($post as $posts)
      @if($posts->status==0)
      <li><!-- start message -->
        <a href="{{route('manageMensajes-status', $posts->id)}}">
          <div class="pull-left">
            <img src="{{asset('admin-lte/dist/img/avatar2.png')}}" class="img-circle" alt="User Image">
          </div>
          <h4>
            {{$posts->user->name}}
            <small><i class="badge bg-green"> New</i></small>
          </h4>
          <p>{{$posts->post}}</p>
        </a>
      </li>
      <!-- end message -->
      @endif
  @endforeach
    </ul>
  </li>

  <li class="footer"><a href="{{route('manageMensajes')}}">See All Messages</a></li>
</ul>
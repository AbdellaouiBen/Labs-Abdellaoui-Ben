@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">User {{$user->name}}</h1>
@stop

@section('content')

<div class="container">
    <div class="d-flex justify-content-center mt-5">
    
        <div class="card card-widget widget-user col-9 pt-2"  style="border: 2px solid #2be6ab">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header" style="background-color: #6922b4; color: white; ">
              <h3 class="widget-user-username">{{ucfirst($user->name)}}  {{ucfirst($user->firstname)}}</h3>
              <h5 class="widget-user-desc">Founder &amp; CEO</h5>
            </div>
            <div class="widget-user-image">
              <img class="img-circle elevation-2" style="border-color: #2be6ab" src="{{asset('storage/'.$user->img)}}" alt="User Avatar">
            </div>
            <div class="card-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header"> <a class="btn btn-warning " href="{{route('user.edit',$user)}}">Modifier ce compte</a>   </h5>
                    <span class="description-text"></span>
                  </div> 
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                      <span class="description-text">email</span>
                    <h5 class="description-header">{{$user->email}}</h5>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header"> 
                        @if (Auth::id()==1 || Auth::id()==2)
                            <a class="btn btn-danger " data-toggle="modal" data-target="#myModal" href="">Supprimer le compte</a>
                        @endif
                    </h5>
                    <span class="description-text"></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
        </div>
        
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
      <div class="modal-content bg-danger">
        <div class="modal-header ">
          <h4 class="modal-title">Attention!!!</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body text-center">
          <p>Vous êtes sur le point de supprimer ce compte! <br> Cette action n'est pas reversible!</p>
        </div>
        <div class="modal-footer float-right">
          <button type="button" class="btn btn-outline-light" data-dismiss="modal">Annuler</button>
          <form action="{{route('user.destroy',$user->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="button" class="btn btn-outline-light">Supprimer le compte</button>
        </form>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>






@stop
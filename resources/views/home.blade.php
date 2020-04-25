@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0">You are logged in as {{ucfirst(Auth::user()->name)}} !</p>
                </div>
            </div>
        </div>
    </div>
    @can('adminWebmaser', App\User::class)
        
    
    <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>{{count($users)}}</h3>

              <p>Utilisateurs</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="{{route('user.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>{{count($forms)}}</h3>

              <p>Messages</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="{{route('form.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>{{count($commentaires)}}</h3>

              <p>Commentaires</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="{{route('commentaire.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>{{count($newsletters)}}</h3>

              <p>Newsletters</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="{{route('newsletter.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>


      <div class="row">
          <div class="col-6">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Derniers membres</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <ul class="users-list clearfix">
                  
                @foreach ($usersss as $user)
                  <li>
                      <img class="w-25" src="{{asset('storage/'.$user->img)}}" alt="User Image">
                      <a class="users-list-name" href="{{route('user.show',$user)}}">{{$user->name}} {{$user->firstname}}</a>
                      <span class="users-list-date">{{$user->created_at->format('d-m-Y')}}</span>
                    </li>
                @endforeach
              </ul>
              <!-- /.users-list -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer text-center">
              <a class="text-dark" href="{{route('user.index')}}">Voir tout les utilisateurs</a>
            </div>
            <!-- /.card-footer -->
          </div>
      </div>




      <div class="col-6">
      <div class="card">
        <div class="card-header ui-sortable-handle" >
          <h3 class="card-title">
            <a href="{{route('article.index')}}">Derniers articles</a>
          </h3>

          <div class="card-tools">
            <ul class="pagination pagination-sm">
              {{$articles->links()}}
            </ul>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <ul class="todo-list ui-sortable" data-widget="todo-list">
              @foreach ($articles as $article)
                  
            <li>
              <!-- drag handle -->
              <span class="">
                <a class="text-dark" href="{{route('article.show',$article)}}">
                <i class="fas fa-newspaper"> </i> 
                {{-- <i class="fas fa-ellipsis-v"></i> --}}
            </a>
              </span>
              <!-- checkbox -->
  
              <!-- todo text -->
              <a class="text-dark" href="{{route('article.show',$article)}}">
              <span class=""> {{$article->titre}}</span>
                </a>
              <!-- Emphasis label -->
              <small class="float-right badge  @if ($article->accepted) badge-success @else badge-danger @endif "><i class="far fa-clock"></i> {{$article->created_at->diffForHumans()}}</small>
              <!-- General tools such as edit or delete-->

            </li>
            @endforeach

           
          </ul>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
          <a href="{{route('article.create')}}" class="btn btn-info float-right"><i class="fas fa-plus"></i> Add item</a>
        </div>
      </div>
    </div>



    </div>
    @endcan
@stop

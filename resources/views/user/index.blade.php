@extends('adminlte::page')

@section('title', 'Users')

@section('content_header')
@stop

@section('content')



<table class="table table-striped table-dark">
    <thead>
        <tr class="text-center">
            <th colspan="6" class="">
                <h1><span class="text-black font-weight-bold bg-teal px-2 rounded">Users</span> </h1> 
            </th>
        </tr>
      <tr>
        <th scope="col">Nom</th>
        <th scope="col">Email</th>
        <th scope="col">Role</th>
        <th scope="col">Image</th>
        <th scope="col">Description</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            
        <tr>
            <th>{{ucfirst($user->name)}} {{ucfirst($user->firstname)}}</th>
            <td>{{$user->email}}</td>
            <td>{{$user->role->role}}</td>
            <td><img class="w-25" src="{{asset('storage/'.$user->img)}}" alt=""></td>
            <td>{{$user->description}}</td>
            <td>                              
                <a  class="d-block py-1 px-0 text-center btn btn-primary rounded-circle " href="{{route('user.show',$user)}}"><i class="fas fa-eye"></i></a>
                <a  class="d-block py-1 px-0 btn btn-warning rounded-circle " href="{{route('user.edit',$user)}}"><i class="fas fa-pencil-alt"></i></a> 
                @if ($user->id!=1)
                <a class="d-block py-1 px-0 text-center rounded-circle btn btn-danger "  data-toggle="modal" data-target="#deleteuser{{$user->id}}" href=""><i class="fas fa-trash-alt"></i></a>
                @endif
            </td>
        </tr>
                <div class="modal fade" id="deleteuser{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog">
                    <div class="modal-content bg-danger">
                        <div class="modal-header ">
                        <h4 class="modal-title">Attention!!!</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        </div>
                        <div class="modal-body text-center">
                        <p>Vous êtes sur le point de supprimer le compte de {{ucfirst($user->name)}} {{ucfirst($user->firstname)}} ! <br> Cette action n'est pas reversible!</p>
                        </div>
                        <div class="modal-footer float-right">
                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Annuler</button>
                        <form action="{{route('user.destroy',$user)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-light">Supprimer ce compte</button>
                        </form>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
        @endforeach
 
    </tbody>
  </table>





@stop

@extends('adminlte::page')

@section('title', 'Roles')

@section('content_header')
@stop

@section('content')




          <table class="table table-striped table-dark">
            <thead>
                <tr class="text-center">
                    <th colspan="6" class="">
                        <h1><span class="text-black font-weight-bold bg-teal px-2 rounded">Roles </span></h1> 
                        <a href="{{route('role.create')}}"><i  class="fas fa-plus-square fa-2x text-success"></i></a>
                    </th>
                </tr>
              <tr class="text-center" >
                <th scope="col">Role</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($roles as $role)
                    
                <tr class="text-center">
                    <td>{{$role->role}}</td>
                    <td>      
                        <div class="text-center">
                            <a  class=" btn btn-warning px-5 mb-1  " href="{{route('role.edit',$role)}}"><i class="fas fa-pencil-alt"></i></a> 
                        </div>                        
                        <div class="text-center">
                            <a class=" px-5 btn btn-danger "  data-toggle="modal" data-target="#deleterole{{$role->id}}" href=""><i class="fas fa-trash-alt"></i></a>
                        </div>                        
                    </td>
                </tr>
                        <div class="modal fade" id="deleterole{{$role->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog">
                            <div class="modal-content bg-danger">
                                <div class="modal-header ">
                                <h4 class="modal-title">Attention!!!</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                </div>
                                <div class="modal-body text-center">
                                <p>Vous êtes sur le point de supprimer le role {{ucfirst($role->role)}}  ! <br> Cette action n'est pas reversible!</p>
                                </div>
                                <div class="modal-footer float-right">
                                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Annuler</button>
                                <form action="{{route('role.destroy',$role)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-light">Supprimer ce role</button>
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
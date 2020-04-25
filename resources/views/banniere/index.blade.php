@extends('adminlte::page')

@section('title', 'Bannières')

@section('content_header')
@stop

@section('content')






             
<table class="table table-striped table-dark">
    <thead>
        <tr class="text-center">
            <th colspan="6" class="">
                <h1><span class="text-black font-weight-bold bg-teal px-2 rounded">Bannières</span>  </h1> 
                <a href="{{route('banniere.create')}}"><i class="fas fa-plus-square fa-2x text-success"></i></a>
            </th>
        </tr>
      <tr  >
        <th class="text-center"  scope="col">Image</th>
        <th class="text-center" scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($bannieres as $banniere)
            
        <tr>
            <th class="text-center"><img class="w-25" src="{{'storage/'.$banniere->img}}" alt=""></th>
            <td>          
                    
                <div class="text-center mb-2">
                    <a  class="  btn btn-warning rounded-circle " href="{{route('banniere.edit',$banniere)}}"><i class="fas fa-pencil-alt"></i></a> 
                </div>
                <div class="text-center">
                    <a class="   rounded-circle btn btn-danger "  data-toggle="modal" data-target="#deletebanniere{{$banniere->id}}" href=""><i class="fas fa-trash-alt"></i></a>
                </div>
            
            </td>
        </tr>
                <div class="modal fade" id="deletebanniere{{$banniere->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog">
                    <div class="modal-content bg-danger">
                        <div class="modal-header ">
                        <h4 class="modal-title">Attention!!!</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        </div>
                        <div class="modal-body text-center">
                        <p>Vous êtes sur le point de supprimer une image des bannieres! <br> Cette action n'est pas reversible!</p>
                        </div>
                        <div class="modal-footer float-right">
                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Annuler</button>
                        <form action="{{route('banniere.destroy',$banniere)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-light">Supprimer cette immage</button>
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


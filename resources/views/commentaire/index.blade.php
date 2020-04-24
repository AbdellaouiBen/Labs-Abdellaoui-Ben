@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<h1 class="m-0 text-dark">commentaires </h1>
@stop

@section('content')



<table class="table table-striped table-dark">
    <thead>
      <tr>
        <th  scope="col" >Auteur</th>
        <th  scope="col" >Article</th>
        <th  scope="col" >Commentaire</th>
        <th  scope="col" >Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($commentaires as $commentaire)
            
        <tr >
            <th>{{ucfirst($commentaire->user->name)}} {{ucfirst($commentaire->user->firstname)}} </th>
            <td>{{$commentaire->article->titre}}</td>
            <td>{{$commentaire->commentaire}}</td>
            <td>              
                <div class="text-center">
                    <a  class="  btn btn-warning rounded-circle " href="{{route('commentaire.edit',$commentaire)}}"><i class="fas fa-pencil-alt"></i></a> 
                </div>
                <div class="text-center">
                    <a class="   rounded-circle btn btn-danger "  data-toggle="modal" data-target="#deletecommentaire{{$commentaire->id}}" href=""><i class="fas fa-trash-alt"></i></a>
                </div>
            
            </td>
        </tr>
        
                <div class="modal fade" id="deletecommentaire{{$commentaire->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog">
                    <div class="modal-content bg-danger">
                        <div class="modal-header ">
                        <h4 class="modal-title">Attention!!!</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        </div>
                        <div class="modal-body text-center">
                        <p>Vous êtes sur le point de supprimer le commentaire de {{ucfirst($commentaire->name)}}! <br> Cette action n'est pas reversible!</p>
                        </div>
                        <div class="modal-footer float-right">
                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Annuler</button>
                        <form action="{{route('commentaire.destroy',$commentaire)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-light">Supprimer ce commentaire</button>
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

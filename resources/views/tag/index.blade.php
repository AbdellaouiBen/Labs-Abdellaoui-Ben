@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark"> Tags</h1>
@stop

@section('content')



          <table class="table table-striped table-dark">
            <thead>
              <tr class="text-center">
                <th scope="col">Tag</th>
                <th class="text-center" scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($tags as $tag)
                    
                <tr class="text-center">
                    <td>{{$tag->tag}}</td>
                    <td>              
                        <div class="text-center mb-2">
                            <a  class="  btn btn-warning rounded-circle " href="{{route('tag.edit',$tag)}}"><i class="fas fa-pencil-alt"></i></a> 
                        </div>
                        <div class="text-center">
                            <a class="   rounded-circle btn btn-danger "  data-toggle="modal" data-target="#deletetag{{$tag->id}}" href=""><i class="fas fa-trash-alt"></i></a>
                        </div>
                    
                    </td>
                </tr>
                        <div class="modal fade" id="deletetag{{$tag->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog">
                            <div class="modal-content bg-danger">
                                <div class="modal-header ">
                                <h4 class="modal-title">Attention!!!</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                </div>
                                <div class="modal-body text-center">
                                <p>Vous êtes sur le point de supprimer le tag "{{ucfirst($tag->tag)}}"! <br> Cette action n'est pas reversible!</p>
                                </div>
                                <div class="modal-footer float-right">
                                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Annuler</button>
                                <form action="{{route('tag.destroy',$tag)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-light">Supprimer ce tag</button>
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

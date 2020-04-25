@extends('adminlte::page')

@section('title', 'Tags')

@section('content_header')
@stop

@section('content')



          <table class="table table-striped table-dark">
            <thead>
                <tr class="text-center">
                    <th colspan="2" class="">
                        <h1><span class="text-black font-weight-bold bg-teal px-2 rounded">Tags</span>  </h1> 
                        <a href="{{route('tag.create')}}"><i class="fas fa-plus-square fa-2x text-success"></i></a>
                    </th>
                </tr>
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

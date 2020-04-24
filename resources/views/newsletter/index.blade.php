@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Newsletter </h1>
@stop

@section('content')


        <table class="table table-striped table-dark container">
            <thead>
              <tr class="text-center" >
                <th scope="col">Email</th>
                <th class="text-center" scope="col">Action</th>
              </tr>
            </thead> 
            <tbody>
                @foreach ($newsletters as $newsletter)
                     
                <tr class="text-center">
                    <td>{{$newsletter->email}}</td>
        
                    <td>              
                   
                        <div class="text-center">
                            <a class="   rounded-circle btn btn-danger "  data-toggle="modal" data-target="#deleteform{{$newsletter->id}}" href=""><i class="fas fa-trash-alt"></i></a>
                        </div>
                    
                    </td> 
                </tr>
                        <div class="modal fade" id="deleteform{{$newsletter->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog">
                            <div class="modal-content bg-danger">
                                <div class="modal-header ">
                                <h4 class="modal-title">Attention!!!</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                </div>
                                <div class="modal-body text-center">
                                <p>Vous êtes sur le point de supprimer l'abonnement de {{$newsletter->email}}! <br> Cette action n'est pas reversible!</p>
                                </div>
                                <div class="modal-footer float-right">
                                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Annuler</button>
                                <form action="{{route('newsletter.destroy',$newsletter)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-light">Supprimer cet abonnement</button>
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
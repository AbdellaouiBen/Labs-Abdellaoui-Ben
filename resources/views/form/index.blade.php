@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Messages </h1>
@stop

@section('content')



        <table class="table table-striped table-dark">
            <thead>
              <tr >
                <th scope="col">Nom</th>
                <th scope="col">Email</th>
                <th scope="col">Sujet</th>
                <th scope="col">Message</th>
                <th class="text-center" scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($forms as $form)
                    
                <tr>
                    <th>{{ucfirst($form->name)}} </th>
                    <td>{{$form->email}}</td>
                    <td>{{$form->subject}}</td>
                    <td>{{$form->msg}}</td>
                    <td>              
                   
                        <div class="text-center">
                            <a class="   rounded-circle btn btn-danger "  data-toggle="modal" data-target="#deleteform{{$form->id}}" href=""><i class="fas fa-trash-alt"></i></a>
                        </div>
                    
                    </td>
                </tr>
                        <div class="modal fade" id="deleteform{{$form->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog">
                            <div class="modal-content bg-danger">
                                <div class="modal-header ">
                                <h4 class="modal-title">Attention!!!</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                </div>
                                <div class="modal-body text-center">
                                <p>Vous êtes sur le point de supprimer le message de {{ucfirst($form->name)}}! <br> Cette action n'est pas reversible!</p>
                                </div>
                                <div class="modal-footer float-right">
                                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Annuler</button>
                                <form action="{{route('form.destroy',$form)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-light">Supprimer ce message</button>
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
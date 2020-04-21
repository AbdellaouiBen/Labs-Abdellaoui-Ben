@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Messages </h1>
@stop

@section('content')


        <div class="mb-5 container">
            <div class="text-center">

                <h1 class=" shadow-lg p-3 mt-3 mb- bg-danger rounded">Messages </h1>
            </div>
            <table class="table table-striped table-secondary">
                <thead class="bg-dark text-warning">
                    <tr class="row">
                        <th scope="col" class="text-center col-2">Nom</th>
                        <th scope="col" class="text-center col-2">Email</th>
                        <th scope="col" class="text-center col-2">Sujet</th>
                        <th scope="col" class="text-center col-4">Message</th>
                        <th scope="col" class="text-center col-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($forms as $form)
                    <tr class="row">
                        <th scope="row" class="text-center col-2">{{$form->name}}</th>
                        <td class="text-center col-2">{{$form->email}}</td>
                        <td class="text-center col-2">{{$form->subject}}</td>
                        <td class="text-center col-4">{{$form->msg}}</td>
                    
                        
                        <td class="d-flex justify-content-around col-2 "> 
                            <form action="{{route('form.destroy',$form)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" >delete</button>
                            </form> 
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
   
@stop
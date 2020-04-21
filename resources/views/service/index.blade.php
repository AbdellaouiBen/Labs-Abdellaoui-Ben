@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Services</h1>
@stop

@section('content')

    <div class="container">
        <h1 class="text-center">Services</h1>
        <a href="{{route('service.create')}}">
            <button class="btn btn-success d-block mx-auto">Service</button>
        </a>
        <table class="table">
            <thead>
              <tr  class="row bg-danger text-white">
                <th class="col">Id</th>
                <th class="col">icon</th>
                <th class="col">titre</th>
                <th class="col">icon</th>
                <th class="col">Action</th>
              </tr>    
            </thead>
            <tbody>
                @foreach ($services as $service)
                    <tr class="row">
                        <td class="col">{{$service->id}}</td>
                        <td class="col"><i style="font-size: 40px" class="{{$service->icon}}"></i></td>
                        <td class="col">{{$service->titre}}</td>
                        <td class="col">{{$service->description}}</td>
                        <td class="col text-center ">
                            <a href="{{route('service.edit',$service)}}" class="btn btn-warning">editer</a>
                            <form action="{{route('service.destroy',$service)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type='submit' class="btn btn-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr> 
                @endforeach
            </tbody>
          </table>  
@stop

@section('css')
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
@endsection
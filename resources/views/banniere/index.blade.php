@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark"> Bannieres</h1>
@stop

@section('content')

    <div class="container">
        <h1 class="text-center">Bannieres</h1>
        <a href="{{route('banniere.create')}}">
            <button class="btn btn-success d-block mx-auto">Ajouter une banniere</button>
        </a>
        <table class="table">
            <thead>
              <tr class="row bg-danger text-white text-center">
                <th class="col">image</th>
                <th class="col">Action</th>
              </tr>    
            </thead>
            <tbody>
                @foreach ($bannieres as $banniere)
                
                    <tr class="row">
                        <td class="col text-center"><img class="w-75" src="{{'storage/'.$banniere->img}}" alt=""></td>
                        <td class="col text-center">
                            <a href="{{route('banniere.edit',$banniere)}}" class="btn btn-warning">edit</a>
                            <form action="{{route('banniere.destroy',$banniere)}}" method="post">
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
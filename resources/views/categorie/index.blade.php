@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark"> Categories</h1>
@stop

@section('content')

    <div class="container">
        <h1 class="text-center">Categories</h1>
        <a href="{{route('categorie.create')}}">
            <button class="btn btn-success d-block mx-auto">Ajouter une categorie</button>
        </a>
        <table class="table">
            <thead>
              <tr  class="row bg-danger text-white">
                <th class="col">categorie</th>
                <th class="col">Action</th>
              </tr>    
            </thead>
            <tbody>
                @foreach ($categories as $categorie)
                    <tr class="row">
                        <td class="col">{{$categorie->categorie}}</td>
                        <td class="col d-flex">
                            <a href="{{route('categorie.edit',$categorie)}}" class="btn btn-warning">edit</a>
                            <form action="{{route('categorie.destroy',$categorie)}}" method="post">
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
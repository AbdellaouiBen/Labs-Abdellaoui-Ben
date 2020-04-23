@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark"> Tags</h1>
@stop

@section('content')

    <div class="container">
        <h1 class="text-center">Tags</h1>
        <a href="{{route('tag.create')}}">
            <button class="btn btn-success d-block mx-auto">Ajouter un tag</button>
        </a>
        <table class="table">
            <thead>
              <tr  class="row bg-danger text-white">
                <th class="col">tag</th>
                <th class="col">Action</th>
              </tr>    
            </thead>
            <tbody>
                @foreach ($tags as $tag)
                    <tr class="row">
                        <td class="col">{{$tag->tag}}</td>
                        <td class="col d-flex">
                            <a href="{{route('tag.edit',$tag)}}" class="btn btn-warning">edit</a>
                            <form action="{{route('tag.destroy',$tag)}}" method="post">
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
@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">edit Categorie</h1>
@stop

@section('content')



    <h1 class="mt-5 text-center bg-danger text-white ">edit Categorie</h1>

    <form action="{{route('categorie.update',$categorie)}}" method="POST" >
        @method('PUT')
        @csrf
        <div class="text-center form-group container">    

            <div class="form-group">
                <label class="d-block input-group-text" for="categorie">categorie</label>
                <input class="form-control @error('categorie') is-invalid @enderror" type="text" name='categorie' value="{{old('categorie',$categorie->categorie)}}">
                @error('categorie')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div> 

            <a class="btn btn-primary" href="{{route('categorie.index')}}">annuler</a>
            <input class="btn btn-warning" type="submit" value="editer">
        </div> 
    </form>
    
@stop
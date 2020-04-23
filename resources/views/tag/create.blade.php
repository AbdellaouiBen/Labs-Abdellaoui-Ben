@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Ajouter un Tag</h1>
@stop

@section('content')

 
    <h1 class="mt-5 text-center bg-danger text-white "><u>Ajouter un Tag</u> </h1>

    <form action="{{route('tag.store')}}" method="POST" >
        @csrf
    
        <div class="text-center form-group container">    
            <div class="form-group">
                <label class="d-block input-group-text" for="tag">tag</label> 
                <input class="form-control @error('tag') is-invalid @enderror" placeholder="tag" type="text " name='tag' value="@if($errors->first('tag'))@else{{old('tag')}}@endif">      
                @error('tag')
                <div class="alert alert-danger">{{ $message }}</div> 
                @enderror   
            </div>             
                
            <a class="btn btn-primary" href="{{route('tag.index')}}">annuler</a>
            <input class="btn btn-success" type="submit" value="ajouter">
        </div>
    </form> 
    
    
@stop 

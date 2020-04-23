@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">edit Tag</h1>
@stop

@section('content')



    <h1 class="mt-5 text-center bg-danger text-white ">edit Tag</h1>

    <form action="{{route('tag.update',$tag)}}" method="POST" >
        @method('PUT')
        @csrf
        <div class="text-center form-group container">    

            <div class="form-group">
                <label class="d-block input-group-text" for="tag">Tag</label>
                <input class="form-control @error('tag') is-invalid @enderror" type="text" name='tag' value="{{old('tag',$tag->tag)}}">
                @error('tag')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div> 

            <a class="btn btn-primary" href="{{route('tag.index')}}">annuler</a>
            <input class="btn btn-warning" type="submit" value="editer">
        </div> 
    </form>
    
@stop
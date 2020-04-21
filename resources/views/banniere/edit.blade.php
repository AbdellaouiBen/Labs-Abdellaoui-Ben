@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">edit banniere</h1>
@stop

@section('content')



    <h1 class="mt-5 text-center bg-danger text-white ">edit banniere</h1>

    <form action="{{route('banniere.update',$banniere)}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="text-center form-group container">    

            <div class="form-group">
                <label class="d-block input-group-text" for="img">image</label>
                <input class="form-control" type="file" name='img' value="{{old('img',$banniere->img)}}">
                @error('img')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
             
            <div class="form-group">
                <label class="d-block input-group-text" for="text">text</label>
                <input class="form-control" type="text" name='text' value="{{old('text',$banniere->text)}}">
                @error('text')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div> 

            <input type="submit" value="soumettre">
        </div> 
    </form>
    
@stop
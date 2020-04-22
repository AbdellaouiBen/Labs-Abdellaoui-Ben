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
                <input class="m-3" type="file" name='img' value="{{old('img',$banniere->img)}}">
                @error('img')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>


            <input class="btn btn-success" type="submit" value="soumettre">
        </div> 
    </form>
    
@stop
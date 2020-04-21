@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Ajouter une banniere</h1>
@stop

@section('content')

 
    <h1 class="mt-5 text-center bg-danger text-white "><u>Ajouter une banniere</u> </h1>

    <form action="{{route('banniere.store')}}" method="POST" enctype="multipart/form-data" >
        @csrf
    
        <div class="text-center form-group container">    
            <div class="form-group">
                <label class="d-block input-group-text" for="img">img</label> 
                <input class="form-control" placeholder="img" type="file" name='img'>      
                @error('img')
                <div class="alert alert-danger">{{ $message }}</div> 
                @enderror   
            </div>             

            <div class="form-group">
                <label class="d-block input-group-text" for="text">text</label> 
                <input class="form-control" placeholder="text" type="text " name='text' value="@if($errors->first('text'))@else{{ old('text') }}@endif">      
                @error('text')
                <div class="alert alert-danger">{{ $message }}</div> 
                @enderror   
            </div>             
                
            <input type="submit" value="ajouter">
        </div>
    </form> 
    
    
@stop 

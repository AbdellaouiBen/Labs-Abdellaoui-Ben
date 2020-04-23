@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Ajouter une banniere</h1>
@stop

@section('content')

 

<form action="{{route('banniere.store')}}" method="POST" enctype="multipart/form-data" >
    @csrf
    
    <div class="text-center form-group container">    
        <h1 class="mt-5 text-center bg-danger text-white "><u>Ajouter une banniere</u> </h1>
            <div class="form-group">
                <label class="d-block input-group-text" for="img">img</label> 
                <input class="m-3 @error('img') is-invalid @enderror" placeholder="img" type="file" name='img'>      
                @error('img')
                <div class="alert alert-danger">{{ $message }}</div> 
                @enderror   
            </div>             

      
                
            <input class="btn btn-success" type="submit" value="ajouter">
        </div>
    </form> 
    
    
@stop 

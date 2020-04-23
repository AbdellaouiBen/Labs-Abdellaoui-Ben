@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Ajouter un testimonial</h1>
@stop

@section('content')

 
    <h1 class="mt-5 text-center bg-danger text-white "><u>Ajouter un testimonial</u> </h1>

    <form action="{{route('testimonial.store')}}" method="POST" enctype="multipart/form-data" >
        @csrf
        
        <div class="text-center form-group container">    
            <div class="form-group">
                <label class="d-block input-group-text" for="full_name">Nom complet du client</label> 
                <input class="form-control @error('full_name') is-invalid @enderror" placeholder="Nom complet du client" type="full_name " name='full_name' value="@if($errors->first('full_name'))@else{{ old('full_name') }}@endif">      
                @error('full_name')
                <div class="alert alert-danger">{{ $message }}</div> 
                @enderror   
            </div>     
    
            <div class="form-group">
                <label class="d-block input-group-text" for="img">img</label> 
                <input class="form-control @error('img') is-invalid @enderror" placeholder="img" type="file" name='img'>      
                @error('img')
                <div class="alert alert-danger">{{ $message }}</div> 
                @enderror   
            </div>             

            <div class="form-group">
                <label class="d-block input-group-text" for="role">Fonction du client</label> 
                <input class="form-control @error('role') is-invalid @enderror" placeholder="Fonction du client" type="role " name='role' value="@if($errors->first('role'))@else{{ old('role') }}@endif">      
                @error('role')
                <div class="alert alert-danger">{{ $message }}</div> 
                @enderror   
            </div>     

            <div class="form-group">
                <label class="d-block input-group-text" for="company">company</label> 
                <input class="form-control @error('company') is-invalid @enderror" placeholder="company" type="company " name='company' value="@if($errors->first('company'))@else{{ old('company') }}@endif">      
                @error('company')
                <div class="alert alert-danger">{{ $message }}</div> 
                @enderror   
            </div>     

            <div class="form-group">
                <label class="d-block input-group-text" for="text">text</label> 
                <input class="form-control @error('text') is-invalid @enderror" placeholder="text" type="text " name='text' value="@if($errors->first('text'))@else{{ old('text') }}@endif">      
                @error('text')
                <div class="alert alert-danger">{{ $message }}</div> 
                @enderror   
            </div>             
                
            <input class="btn btn-success" type="submit" value="ajouter">
        </div>
    </form> 
    
    
@stop 

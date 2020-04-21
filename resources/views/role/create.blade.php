@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Ajouter un Role</h1>
@stop

@section('content')

 
    <h1 class="mt-5 text-center bg-danger text-white "><u>Ajouter un Role</u> </h1>

    <form action="{{route('role.store')}}" method="POST" >
        @csrf
    
        <div class="text-center form-group container">    
            <div class="form-group">
                <label class="d-block input-group-text" for="role">role</label> 
                <input class="form-control" placeholder="role" type="text " name='role' value="@if($errors->first('role'))@else{{ old('role') }}@endif">      
                @error('role')
                <div class="alert alert-danger">{{ $message }}</div> 
                @enderror   
            </div>             
                
            <input type="submit" value="ajouter">
        </div>
    </form> 
    
    
@stop 

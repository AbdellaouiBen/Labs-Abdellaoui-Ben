@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">edit Role</h1>
@stop

@section('content')



    <h1 class="mt-5 text-center bg-danger text-white ">edit Role</h1>

    <form action="{{route('role.update',$role)}}" method="POST" >
        @method('PUT')
        @csrf
        <div class="text-center form-group container">    

            <div class="form-group">
                <label class="d-block input-group-text" for="role">role</label>
                <input class="form-control @error('role') is-invalid @enderror" type="text" name='role' value="{{old('role',$role->role)}}">
                @error('role')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div> 
            <input type="submit" value="soumettre">
        </div> 
    </form>
    
@stop
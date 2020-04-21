@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Edit Logo</h1>
@stop

@section('content')



<div class="container">
    <h1 class="mt-5 text-center bg-danger text-white ">edit logo</h1>

    <form action="{{route('logo.update',$logo)}}" method="POST"  enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="text-center form-group container">    

            <div class="form-group">
                {{-- <label class=" " for="logo">logo</label> --}}
                <input class="" type="file" name='logo' >
                @error('logo')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div> 
            <input class="btn btn-warning" type="submit" value="edit">
        </div> 
    </form>
</div> 
@stop
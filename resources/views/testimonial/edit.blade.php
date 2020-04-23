@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">edit un testimonial</h1>
@stop

@section('content')



    <h1 class="mt-5 text-center bg-danger text-white ">edit un testimonial</h1>

    <form action="{{route('testimonial.update',$testimonial)}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="text-center form-group container">    
            
           <div class="form-group">
               <label class="d-block input-group-text" for="full_name">Nom complet du client</label>
               <input class="form-control @error('full_name') is-invalid @enderror" type="text" name='full_name' value="{{old('full_name',$testimonial->full_name)}}">
               @error('full_name')
               <div class="alert alert-danger">{{ $message }}</div>
               @enderror
           </div> 

            <div class="form-group">
                <label class="d-block input-group-text" for="text">image</label>
                <input class="form-control @error('img') is-invalid @enderror" type="file" name='img' value="{{old('img',$testimonial->img)}}">
                @error('img')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
             
            <div class="form-group">
                <label class="d-block input-group-text" for="role">function du client</label>
                <input class="form-control @error('role') is-invalid @enderror" type="text" name='role' value="{{old('role',$testimonial->role)}}">
                @error('role')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div> 
             
            <div class="form-group">
                <label class="d-block input-group-text" for="company">Nom de la companie</label>
                <input class="form-control @error('company') is-invalid @enderror" type="text" name='company' value="{{old('company',$testimonial->company)}}">
                @error('company')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div> 
             
            <div class="form-group">
                <label class="d-block input-group-text" for="text">text</label>
                <input class="form-control @error('text') is-invalid @enderror" type="text" name='text' value="{{old('text',$testimonial->text)}}">
                @error('text')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div> 

            <a class="btn btn-primary" href="{{route('testimonial.index')}}">annuler</a>
            <input class="btn btn-warning" type="submit" value="soumettre">
        </div> 
    </form>
    
@stop
@extends('adminlte::page')

@section('title', 'Modifier le logo')

@section('content_header')
@stop

@section('content')


<div class="d-flex justify-content-center mt-3">
    <div class="card card-primary w-75 ">
        <div class="card-header">
          <h3 class="card-title">Modifier le logo </h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('logo.update',$logo)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
          <div class="card-body">

            <div class="form-group">
                <label for="logo">Logo</label>
                <label for="logo">Image à rajouter a la banniere</label>
                <input name="logo" type="file" class="form-control @error('logo') is-invalid @enderror" id="logo">
        
                @error('logo')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
       
        
            </div>
         
          <!-- /.card-body -->
    
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Envoyer</button>
            <a href="{{route('logo.index')}}" class="btn btn-danger">Annuler</a>
          </div>
        </form>
      </div>
    </div>
    




@stop
@extends('adminlte::page')

@section('title', 'Modifier une banniere')

@section('content_header')
@stop

@section('content')


<div class="d-flex justify-content-center mt-3">
    <div class="card card-primary w-75 ">
        <div class="card-header">
          <h3 class="card-title">Modifier une banniere  </h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('banniere.update',$banniere)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
          <div class="card-body">

            <div class="form-group">
              <label for="img">Image à rajouter a la banniere</label>
              <input name="img" type="file" class="form-control @error('img') is-invalid @enderror" id="img">
      
              @error('img')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
        
            </div>
         
          <!-- /.card-body -->
    
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Envoyer</button>
            <a href="{{route('banniere.index')}}" class="btn btn-danger">Annuler</a>
          </div>
        </form>
      </div>
    </div>







    
@stop
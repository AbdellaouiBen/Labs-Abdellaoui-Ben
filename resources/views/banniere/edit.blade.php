@extends('adminlte::page')

@section('title', 'AdminLTE')

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
                <label for="img">Image de la banniere</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input name="img" type="file" class="custom-file-input  @error('img') is-invalid @enderror" id="img">
                        <label class="custom-file-label" for="img">Choisir une image</label>
                    </div>
                </div>
                @error('img')
                    <div class="alert alert-danger">{{ $message }}</div>
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
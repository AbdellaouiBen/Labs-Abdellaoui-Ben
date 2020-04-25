@extends('adminlte::page')

@section('title', 'Creer une Categorie')

@section('content_header')
@stop

@section('content')



    
<div class="d-flex justify-content-center mt-3">
    <div class="card card-primary w-75 ">
        <div class="card-header">
          <h3 class="card-title">Creer une Categorie </h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('categorie.store')}}" method="post" >
            @csrf
          <div class="card-body">
            <div class="form-group">
                <label for="categorie">Categorie</label>
                <input name="categorie" type="text" class="form-control @error('categorie') is-invalid @enderror" id="categorie" value="@if($errors->first('categorie'))@else{{ old('categorie') }}@endif" placeholder="categorie">
                @error('categorie')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
    
    
          <!-- /.card-body -->
    
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Envoyer</button>
            <a href="{{route('categorie.index')}}" class="btn btn-danger">Annuler</a>
          </div>
        </form>
      </div>
    </div>


    
@stop 

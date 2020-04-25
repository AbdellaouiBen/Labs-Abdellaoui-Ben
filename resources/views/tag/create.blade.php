@extends('adminlte::page')

@section('title', 'Creer un tag')

@section('content_header')
@stop

@section('content')

<div class="d-flex justify-content-center mt-3">
    <div class="card card-primary w-75 ">
        <div class="card-header">
          <h3 class="card-title">Creer un tag </h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('tag.store')}}" method="post" >
            @csrf
          <div class="card-body">
            <div class="form-group">
                <label for="tag">Nom du tag</label>
                <input name="tag" type="text" class="form-control @error('tag') is-invalid @enderror" id="tag" value="@if($errors->first('tag'))@else{{ old('tag') }}@endif" placeholder="Nom du tag">
                @error('tag')
                <span class="invalid-feedback" tag="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
    
    
          <!-- /.card-body -->
    
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Envoyer</button>
            <a href="{{route('tag.index')}}" class="btn btn-danger">Annuler</a>
          </div>
        </form>
      </div>
    </div>
 


    
@stop 

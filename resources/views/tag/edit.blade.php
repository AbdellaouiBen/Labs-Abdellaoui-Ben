@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
@stop

@section('content')

<div class="d-flex justify-content-center mt-3">
    <div class="card card-primary w-75 ">
        <div class="card-header">
          <h3 class="card-title">Modifier le tag "{{$tag->tag}}"</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('tag.update',$tag)}}" method="post" >
            @csrf
            @method('PUT')
          <div class="card-body">
            <div class="form-group">
                <label for="tag">tag</label>
                <input name="tag" type="text" class="form-control @error('tag') is-invalid @enderror" id="tag" value="{{ old('tag',$tag->tag) }}" placeholder="tag">
                @error('tag')
                <span class="invalid-feedback" role="alert">
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
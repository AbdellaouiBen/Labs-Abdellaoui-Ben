@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
@stop

@section('content')

 
<div class="d-flex justify-content-center">
<div class="card card-primary w-75 ">
    <div class="card-header">
      <h3 class="card-title">Mofifier le commentaire </h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('commentaire.update',$commentaire)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card-body">
          <div class="form-group">
              <label for="commentaire">Commentaire</label>
              <textarea class="form-control @error('name') is-invalid @enderror" name="commentaire" id="commentaire" cols="30" rows="10">
                {{ old('commentaire',$commentaire->commentaire) }}
              </textarea>
              @error('name')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
          </div>

      </div>

    
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Envoyer</button>
        <a href="{{route('commentaire.index')}}" class="btn btn-danger">Annuler</a>
      </div>
    </form>
  </div>
</div>






@stop